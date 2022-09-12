<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class FinanceOfficeController extends Controller {
       public function index() {
        return view( 'finance-office' );
    }
    private function trans(){
       return   DB::table( 'transactions' )
        ->leftjoin( 'investors', 'investors.vehiclePlateNo',  'transactions.vehiclePlateNo' )
        ->leftJoin( 'brekete', 'brekete.vehicle', 'transactions.vehiclePlateNo' )
        ->whereIn('paymentMethod', ['Tella Agent','platform','Online Payment'])
        ->select( 'transactions.*', 'brekete.percentage',  'investors.investorName', 'investors.acctNumber', 'investors.sortCode', 'investors.debitAccount' );
    }
    public function payoutManagerFilter(Request $request) {
// dd($request->all());
        if($request->date == null ){
            if ($request->startdate == null && $request->endDate == null) {
                return back()->with("Emessage","Please Select a Field");
                abort(404);
            }else{
                $transaction = $this->trans()
                ->whereBetween( 'created_at', [ $request->startDate, $request->endDate ] )
                ->latest()->get();
            }
        }else{
            $transaction = $this->trans()
            ->whereDate( 'created_at',  $request->date )
            ->latest()->get();
        }
       $payout = DB::table( 'payout_manager' )->latest()->get();

        // dd($transaction);
        // $dates = json_encode( array(
        //     "startDate" => $request->startdate,
        //     "endDate" => $request->endDate,
        //     "specDate" => $request->date,
        // ));
                return view( 'payout-manager', [ 'payout' => $payout, 'transaction' => $transaction, 'modal' => "true" , "dates" => json_encode($request->all()) ] );
            }

    public function generatePayoutManager(Request $request) {
        // dd($request->date);
        // dd($data);

        $data = json_decode($request->date);
        if($data->date == null ){
            if ($data->startdate == null && $data->endDate == null) {
                return back()->with("Emessage","Please Select a Field");
                abort(404);
            }else{
                $transaction = $this->trans()
                ->whereBetween( 'created_at', [ $data->startDate, $data->endDate ] )
                ->latest()->get();
            }
        }else{
            $transaction = $this->trans()
            ->whereDate( 'created_at',  $data->date )
            ->latest()->get();
        }
        // dd($transaction);

        // $arr = array();

        foreach ($transaction as $value) {
            $arr[] =  $value->id ;

            // dd($value);
        }

// dd(json_encode($arr));

        $json = json_encode($arr);
        $rand = rand(000000,999999);
        $reference = date("Ymdmhi").$rand;

         DB::table( 'payout_manager' )->insert([
            'reference' => $reference,
            'fleet' => $data->fleet,
            'stakeholders' => $data->stakeholder,
            'total_amount' => $request->totalAmount,
            'amount_disbursed' => $request->disbursedAmount,
            'agent' => Auth()->user()->first_name." ". Auth()->user()->last_name,
            'status' => "pending",
            'data' => $json,
            'created_at' => now(),
         ]);

       $payout = DB::table( 'payout_manager' )->latest()->get();

        // dd($transaction);
        // $dates = json_encode( array(
        //     "startDate" => $request->startdate,
        //     "endDate" => $request->endDate,
        //     "specDate" => $request->date,
        // ));

                return view( 'payout-manager', [ 'payout' => $payout, 'transaction' => $transaction, 'modal' => "false"  ] );
            }
            public function changeStatus($status,$id) {
                // dd($status);

                $ins = DB::table('payout_manager')->where('id', $id)
                ->update([
                    "status"=>$status,
                    "updated_at"=>now(),
                ], );

                return back()->with("success", "success");

            //    $payout = DB::table( 'payout_manager' )->latest()->get();
                // return view( 'payout-manager', [ 'payout' => $payout, 'modal' => "false" ] );
            }
            
            public function payoutView($id) {
                // dd($status);
                $ins = DB::table('payout_manager')->where('id', $id)->first();
                $data = json_decode( $ins->data );
                $record = DB::table('transactions')->whereIn('id',$data)->get();
                // dd($record);
                    if ($ins) {
                        return view( 'payout-viewss', [ 'data' => $ins,'record' => $record ] );
                    }else{
                return back()->with("Emessage" ,"Record not found");
                    }
            }


    private function transaction() {
        return DB::table( 'transactions' )
        ->where( 'paymentMethod', 'Tella Agent' )
        ->orWhere( 'paymentMethod', 'Platform' )
        ->leftjoin( 'investors', 'investors.vehiclePlateNo',  'transactions.vehiclePlateNo' )
        ->leftJoin( 'brekete', 'brekete.vehicle', 'transactions.vehiclePlateNo' )
        ->leftJoin( 'car_fleet', 'car_fleet.vehiclePlateNo', 'transactions.vehiclePlateNo' )
        ->select( 'transactions.*', 'brekete.percentage', 'car_fleet.type', 'investors.investorName', 'investors.acctNumber', 'investors.sortCode', 'investors.debitAccount' )
        ->latest()->get()->take( 50 );
    }

    public function payoutManager() {
       $payout = DB::table( 'payout_manager' )->latest()->get();
        // dd( $payout );
        return view( 'payout-manager', [ 'payout' => $payout, 'modal' => "false" ] );
    }


    public function depositModule() {
        $users = DB::table( 'transactions' )->select( DB::raw( 'COUNT(*) as count' ) )
        ->where( 'paymentMethod', 'Tella Agent' )
        ->orWhere( 'paymentMethod', 'Platform' )
        ->whereYear( 'created_at', date( 'Y' ) )
        ->groupBy( DB::raw( 'Month(created_at)' ) )
        ->pluck( 'count' );

        $months =  DB::table( 'transactions' )->select( DB::raw( 'Month(created_at) as month' ) )
        ->where( 'paymentMethod', 'Tella Agent' )
        ->orWhere( 'paymentMethod', 'Platform' )
        ->whereYear( 'created_at', date( 'Y' ) )
        ->groupBy( DB::raw( 'Month(created_at)' ) )
        ->pluck( 'month' );

        $datas = array( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 );
        foreach ( $months as $index => $month ) {
            $datas[ $month ] = $users[ $index ];
        }
        // dd( $datas );

        $transaction = $this->transaction();
        return view( 'deposit-module', [ 'transaction' => $transaction, 'data' => $datas ] );
    }

    public function downloadCsv(Request $request){

// dd($request->all());

if($request->date == null ){
    if ($request->startDate == null && $request->endDate == null) {
        return back()->with("Emessage","Please Select a Field");
        abort(404);
    }else{
        $data = DB::table("transactions")
        // ->where( 'paymentMethod', 'Tella Agent' )
        // ->orWhere( 'paymentMethod', 'Platform' )
       ->whereBetween( 'created_at', [ $request->startDate, $request->endDate ] )
       ->leftjoin( 'investors', 'investors.vehiclePlateNo',  'transactions.vehiclePlateNo' )
       ->leftJoin( 'brekete', 'brekete.vehicle', 'transactions.vehiclePlateNo' )
       ->select( 'transactions.*', 'brekete.percentage','investors.investorName', 'investors.acctNumber', 'investors.sortCode', 'investors.debitAccount' )
            ->get()->take(500);
    }
}else{
    $data = DB::table("transactions")
    // ->where( 'paymentMethod', 'Tella Agent' )
    // ->orWhere( 'paymentMethod', 'Platform' )
    ->whereDate( 'created_at', '=', $request->date )
   ->leftjoin( 'investors', 'investors.vehiclePlateNo',  'transactions.vehiclePlateNo' )
   ->leftJoin( 'brekete', 'brekete.vehicle', 'transactions.vehiclePlateNo' )
   ->select( 'transactions.*', 'brekete.percentage','investors.investorName', 'investors.acctNumber', 'investors.sortCode', 'investors.debitAccount' )
        ->get()->take(500);
}

        $headers = array(
            'Content-Type' => 'application/vnd.ms-excel; charset=utf-8',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Content-Disposition' => 'attachment; filename=abc.csv',
            'Expires' => '0',
            'Pragma' => 'public',
        );

        // dd($data);

    $filename = "download.csv";
    $handle = fopen($filename, 'w');
    fputcsv($handle, [
        "TRANSACTION REFERENCE NUMBER",
        "BENEFICIARY NAME",
        "PAYMENT AMOUNT",
        "PAYMENT DUE DATE",
        "BENEFICIARY CODE",
        "BENEFICIARY ACCOUNT NUMBER",
        "BENEFICIARY BANK SORT CODE",
        "DEBIT ACCOUNT NUMBER"
    ]);


        // ->chunk(100, function ($data) use ($handle) {
// dd( $data);

            $x = 1;
        foreach ($data as $row) {
            if($row->paymentMethod == "Tella Agent"  || $row->paymentMethod == "Platform"){
            $acctNumber =  str_pad($row->acctNumber, 10, '0', STR_PAD_LEFT);
            $sortCode =  str_pad($row->sortCode, 10, '0', STR_PAD_LEFT);

            $x++;
            // Add a new row with data
            fputcsv($handle, [
                strtoupper ($row->vehiclePlateNo) . Carbon::parse($row->created_at)->format('d/m/Y'). "-".  $x,
                $row->investorName ,
                ($row->percentage == '0') ? $row->amount  : ((100 - 14.5) / 100) * $row->amount ,
                 Carbon::parse($row->created_at)->addDay(1)->format('d/m/Y'),
                  strtok($row->investorName, ' '). strtoupper ($row->vehiclePlateNo) . Carbon::parse($row->created_at)->format('d/m/Y') ."-". $x,
                 $acctNumber,
                 $sortCode,
                $row->debitAccount ,
            ]);
        }
        }
    // });
    fclose($handle);

    return Response::download($filename, "download.xlsx", $headers);
    }
}
