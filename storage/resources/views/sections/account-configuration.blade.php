<div class="maintenanceCost">
    <div>
        <span class="sectionTitle d-block text-inter p-0">Account Configuration</span>
        {{-- <span class="subTitle">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro laborum debitis at laudantium id? Culpa?
        </span> --}}
    </div>
    <a class="addBtn" href="new-account-permissions">
        CREATE NEW
    </a>
</div>

<div class="card-box table-responsive">
    <table id="datatable" class="table table-bordered nowrap"
        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead class="text-inter">
            <tr>
                <th>
                    <input type="checkbox" class="check" />
                </th>
                <th>ACCOUNT NAME</th>
                <th>DATE CREATED</th>
                <th>USER SIZE</th>
                <th>STATUS</th>
                <th>LAST MODIFIED</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    <input type="checkbox" class="check" />
                </td>
                <td>
                    <a href="fleet-operator-permission" class="text-primary">lorem</a>
                </td>
                <td>lorem</td>
                <td>lorem</td>
                <td>lorem</td>
                <td>lorem</td>
            </tr>
            @foreach ($userType as $item)
                <tr>
                    <td>
                        <input type="checkbox" class="check" />
                    </td>
                    <td>
                        <a href="{{ route('fleet-operator-permission', ['id' => $item->user_type_id]) }}">

                            {{ $item->user_type }}
                        </a>
                    </td>
                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</td>
                    <td>{{ $item->total_users }}</td>
                    <td>
                        @if ($item->status == 1)
                            Active
                        @else
                            Inactive
                        @endif
                    </td>
                    <td>{{ $item->updated_at }}</td>

                </tr>
            @endforeach


        </tbody>
    </table>
</div>
