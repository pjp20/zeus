let overview = document.querySelector(".list-overview");
let fleet = document.querySelector(".list-fleet");
let track = document.querySelector(".list-track");



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

}
