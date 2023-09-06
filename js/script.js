$(document).ready(function (){
    var table = $('#example').DataTable({
        'responsive': true
    });

    // Handle click on "Expand All" button
    $('#btn-show-all-children').on('click', function(){
        // Expand row details
        table.rows(':not(.parent)').nodes().to$().find('td:first-child').trigger('click');
    });

    // Handle click on "Collapse All" button
    $('#btn-hide-all-children').on('click', function(){
        // Collapse row details
        table.rows('.parent').nodes().to$().find('td:first-child').trigger('click');
    });
});

// Formatting function for row details - modify as you need
function format(d) {
    // `d` is the original data object for the row
    return (
        '<dl>' +
        '<dt>Full name:</dt>' +
        '<dd>' +
        d.name +
        '</dd>' +
        '<dt>Extension number:</dt>' +
        '<dd>' +
        d.extn +
        '</dd>' +
        '<dt>Extra info:</dt>' +
        '<dd>And any further details here (images etc)...</dd>' +
        '</dl>'
    );
}
 
let table = new DataTable('#example', {
    ajax: '../ajax/data/objects.txt',
    columns: [
        {
            className: 'dt-control',
            orderable: false,
            data: null,
            defaultContent: ''
        },
        { data: 'name' },
        { data: 'position' },
        { data: 'office' },
        { data: 'salary' }
    ],
    order: [[1, 'asc']]
});
 
// Add event listener for opening and closing details
table.on('click', 'td.dt-control', function (e) {
    let tr = e.target.closest('tr');
    let row = table.row(tr);
 
    if (row.child.isShown()) {
        // This row is already open - close it
        row.child.hide();
    }
    else {
        // Open this row
        row.child(format(row.data())).show();
    }
});
