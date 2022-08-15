



let overview = document.querySelector(".list-overview");
let fleet = document.querySelector(".list-fleet");
let track = document.querySelector(".list-track");

let vehicleOverviewSec = document.querySelector('.overview_section');
let fleetSec = document.querySelector('.fleet_section');
let trackSec = document.querySelector('.track_section');


let vehicleOverview = document.querySelector('.vehicle-list-overview');
let vehicleFleet = document.querySelector('.vehicle-list-fleet');
// let vehicleTrack = document.querySelector('.vehicle-list-track');

vehicleOverview.addEventListener('click', () => {
    vehicleOverview.classList.add('bbd');
    vehicleFleet.classList.remove('bbd');
    vehicleOverviewSec.style.display = 'block';
    fleetSec.style.display = 'none';
    trackSec.style.display = 'none';
});

vehicleFleet.addEventListener('click', () => {
    vehicleOverview.classList.remove('bbd');
    vehicleFleet.classList.add('bbd');
    vehicleOverviewSec.style.display = 'none';
    fleetSec.style.display = 'block';
    trackSec.style.display = 'none';
});

// vehicleTrack.addEventListener('click', () => {
//     vehicleOverview.classList.remove('bbd');
//     vehicleFleet.classList.remove('bbd');
//     vehicleTrack.classList.add('bbd');
//     vehicleOverviewSec.style.display = 'none';
//     fleetSec.style.display = 'none';
//     trackSec.style.display = 'block';
// })

let overviewSection = document.querySelector('.overview_section');
let fleetSection = document.querySelector('.fleet_section');
let trackSection = document.querySelector('.track_section');
let addNewTab = document.querySelector('.addNew ');

let reportModuleFilter = document.querySelector('.reportModuleFilter');
let closeBtn = document.querySelector('.closeBtn');
let filterModal = document.querySelector('.filterModal');
reportModuleFilter.addEventListener('click', () => {
    if (filterModal.style.display = "none") {
        filterModal.style.display = "block";
    }
})
closeBtn.addEventListener('click', () => {
    filterModal.style.display = 'none';
})


overview.addEventListener('click', () => {
    overviewSection.style.display = "block";
    addNewTab.style.display = "block";
    fleetSection.style.display = "none";
    trackSection.style.display = "none";

    overview.classList.add("bbd");
    fleet.classList.remove("bbd");
    track.classList.remove("bbd");
})


fleet.addEventListener('click', () => {
    overviewSection.style.display = 'none';
    fleetSection.style.display = 'block';
    trackSection.style.display = 'none';
    addNewTab.style.display = 'none';

    overview.classList.remove("bbd");
    fleet.classList.add("bbd");
    track.classList.remove("bbd");
})

track.addEventListener('click', () => {
    overviewSection.style.display = 'none';
    fleetSection.style.display = 'none';
    trackSection.style.display = 'block';
    addNewTab.style.display = 'none';

    overview.classList.remove("bbd");
    fleet.classList.remove("bbd");
    track.classList.add("bbd");
})

let listGeneral = document.querySelector('.list-general');
let listTransaction = document.querySelector('.list-transaction');
let listRemittance = document.querySelector('.list-remittance');

function listGeneralOverview() {
    // listGeneral.classList.add('bbd');
    // listTransaction.classList.remove('bdd');
    // listRemittance.classList.remove('bdd');
    alert('hi');
}
function listFleetTransaction() {
    // listTransaction.classList.add('bdd');
    // listGeneral.classList.remove('bbd');
    // listRemittance.classList.remove('bdd');
    alert('hi');

}
function listRemittanceOverview() {
    // listTransaction.classList.remove('bdd');
    // listGeneral.classList.remove('bbd');
    // listRemittance.classList.add('bdd');
    alert('hi');

};


// let two = document.querySelector(".listFinanceOverview");
let two =  document.getElementById('test');
// let financeTransaction = document.querySelector('.list_finance_transaction');
// let financeRemittance = document.querySelector('.list_finance_remittance');

// let financeDiv = document.querySelector('.finance_general_overview');
// let transactionDiv = document.querySelector('.finance_transaction_table');
// let remittanceDiv = document.querySelector('.finance_remittance_table');

// two.addEventListener('click', () => {

//     alert('hi');
// financeGeneralOverivew.classList.add('bbd');
// financeTransaction.classList.remove('bbd');
// financeRemittance.classList.remove('bbd');
// });
two.addEventListener('click', () => {
    alert('hiiii');
})


