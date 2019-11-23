/*
Place any jQuery/helper plugins in here.
*/

//  ******************
//  THE DATEPICKER
//  ******************
/* Range Datepicker */
var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

var checkin = $('#first_date').fdatepicker({
	format: 'yyyy-mm-dd',
	onRender: function (date) {
		return date.valueOf() < now.valueOf() ? '' : '';
	}
}).on('changeDate', function (ev) {
	if (ev.date.valueOf() > checkout.date.valueOf()) {
		var newDate = new Date(ev.date)
		newDate.setDate(newDate.getDate() + 1);
		checkout.update(newDate);
	}
	checkin.hide();
	$('#second_date')[0].focus();
}).data('datepicker');

var checkout = $('#second_date').fdatepicker({
	format: 'yyyy-mm-dd',
	onRender: function (date) {
		return date.valueOf() < checkin.date.valueOf() ? 'disabled' : '';
	}
}).on('changeDate', function (ev) {
	checkout.hide();
}).data('datepicker');

/* Single Datepicker */
$('#single_date').fdatepicker({
    format: 'yyyy-mm-dd',
    disableDblClickSelection: true
});
