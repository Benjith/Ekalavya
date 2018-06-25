<?php $this->load->view('Header/header.php'); ?>
<section class="content--full">
    <div class="card ">
        <div class="card-body">
            <h4 class="card-title">Sales Invoice</h4>

            <div class="tab-container">
                <ul class="nav nav-tabs" role="tablist" id="myTab">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#addnew" role="tab" id="navNew">Add New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#list" role="tab" id="navList">List</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="list" name="list" role="tabpanel">
                        
                    </div>
                    <div class="tab-pane active fade show" id="addnew" role="tabpanel">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" disabled class="form-control" value="INV/00" />
                                        <select id="cashOrParty" name="cashOrParty" class="select2">
                                            <option value="0">--Select Cash/Party--</option>
                                            <?php
                                                foreach($cashOrParty as $key){?>
                                                <option value="<?= $key->ledgerId; ?>"><?=$key->ledgerName;?></option>
                                            <?php } ?>
                                        </select>
                                        <br>
                                        <select id="salesAccount" name="salesAccount" class="select2" data-minimum-results-for-search="Infinity">                                            
                                            <?php
                                                foreach($salesAccount as $key){?>
                                                <option value="<?= $key->ledgerId; ?>"><?=$key->ledgerName;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>                                
                                <div class="col-md-6">&nbsp;</div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" id="voucherDate" name="voucherDate" class="form-control date-picker" placeholder="Voucher Date">                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row eklavyapurchaseinvoicewhitediv">
                                <div class="table-responsive col-md-12">
                                    <table class="table table-bordered  mb-0" id="tblSalesInvoice">
                                        <thead class="thead-inverse">
                                            <tr>
                                            <th width="1%" style="text-align: center;"><i class="zmdi zmdi-file-plus zmdi-hc-fw" style="font-size: 18px;" onclick="addRow()"></i></th>
                                                <th width="1%" style="text-align: center;">#</th>
                                                <th width="5%" style="text-align: center;" >Purity</th>
                                                <th width="8%" style="text-align: center;" >Product</th>
                                                <th width="2%" style="text-align: center;">Qty</th>
                                                <th width="5%" style="text-align: center;">Unit</th>
                                                <th width="4%" style="text-align: center;">Rate</th>
                                                <th width="3%" style="text-align: center;">Net Wt</th>
                                                <th width="3%" style="text-align: center;">Stone Wt</th>
                                                <th width="5%" style="text-align: center;">Stone Rate </th>
                                                <th width="3%" style="text-align: center;">Gross Wt</th>
                                                <th width="3%" style="text-align: center;">Wastage  </th>
                                                <th width="5%" style="text-align: center;">Making Charge </th>                                                
                                                <th width="5%" style="text-align: center;">Amount </th>
                                            </tr>
                                        </thead>
                                        <tbody id="tablebody">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer hidden-xs-down">
    <p><?=$this->lang->line('company_title');?>. All rights reserved.</p>
    <ul class="nav footer__nav">
        <a class="nav-link" href="#">Homepage</a>
        <a class="nav-link" href="#">Company</a>
        <a class="nav-link" href="#">Support</a>
        <a class="nav-link" href="#">News</a>
        <a class="nav-link" href="#">Contacts</a>
    </ul>
</footer>
<!-- Javascript -->
<!-- Vendors -->
<script src="<?php echo asset_url(); ?>/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/flot/jquery.flot.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/flot/jquery.flot.resize.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/peity/jquery.peity.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/flatpickr/dist/flatpickr.min.js"></script>
<!-- Charts and maps-->
<script src="<?php echo asset_url(); ?>/demo/js/flot-charts/curved-line.js"></script>
<script src="<?php echo asset_url(); ?>/demo/js/flot-charts/line.js"></script>
<script src="<?php echo asset_url(); ?>/demo/js/flot-charts/chart-tooltips.js"></script>
<script src="<?php echo asset_url(); ?>/demo/js/other-charts.js"></script>
<script src="<?php echo asset_url(); ?>/demo/js/jqvmap.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
<!-- App functions and actions -->
<script src="<?php echo asset_url(); ?>/js/app.min.js"></script>
<!-- Vendors: Data tables -->
<script src="<?php echo asset_url(); ?>/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/jszip/dist/jszip.min.js"></script>
<script src="<?php echo asset_url(); ?>/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>

<script type="text/javascript">
    var jsonobj="";

    var addSerialNumber = function () {
    var i = 0;
    $('#tblSalesInvoice tr').each(function(index) {        
        $(this).find('td:nth-child(2)').html(index++);
    });
}; 
addRow();


function addRow(){
 
 
      
$('#tablebody').append('<tr><th scope="row"><button class="btn btn-light" style="width:100%;"><i class="zmdi zmdi-close-circle-o " style="color: #ff0018; font-size: 18px;" ></i></button></th><td style="text-align:center;"><input value="" style="border: none; padding: 0;" type="text" class="form-control" disabled name="slNo[]" ></td><td><select class="myslct procode" style="border: none; width:100%; padding: 0;"  name="code[]" onchange="procode(this,event)"><option></option><?php foreach ($productCode as $codepro ) { ?><option value="<?=$codepro->productId?>"><?=$codepro->productCode?></option><?php } ?></select></td><td ><select class="myslct proname" style="border: none; padding: 0; width:100%; background:none;color:white;" name="product[]" onchange="proname(this)"><option></option><?php foreach ($productName as $namepro ) { ?><option value="<?=$namepro->productId?>"><?=$namepro->productName?></option><?php } ?></select></td><td><input style="border: none; padding: 0; text-align:center;" type="text" class="form-control quantity"  name="quantity[]" onchange="callCallculateAmountRow(this)"></td><td><select style="border: none; padding: 0; width:100%;" type="text" class="form-control unit" name="unit[]" onchange="unit(this)" data-minimum-results-for-search="Infinity"></select></td><td><input style="border: none; padding: 0; text-align:center;" type="text" class="form-control rate" name="rate[]" onchange="callCallculateAmountRow(this)"></td><td><input type="text" style="border: none; padding: 0; text-align:center;" class="form-control netweighttbl" name="netweighttbl[]" onchange="callCallculateAmountRow(this)"></td><td><input type="text" style="border: none; padding: 0; text-align:center;" class="form-control stoneweight" name="stoneweight[]" onchange="callCallculateAmountRow(this)"></td><td><input type="text" style="border: none; padding: 0; text-align:center;" class="form-control stonerate" name="stonerate[]" onchange="callCallculateAmountRow(this)"></td><td><input type="text" style="border: none; padding: 0; text-align:center;" class="form-control grossweighttbl" name="grossweighttbl[]" onchange="callCallculateAmountRow(this)"></td><td><input type="text" style="border: none; padding: 0; text-align:center;" class="form-control wastagetbl" name="wastagetbl[]" onchange="callCallculateAmountRow(this)"></td><td><input type="text" style="border: none; padding: 0; text-align:center;" class="form-control makingcharge" name="makingcharge[]" onchange="callCallculateAmountRow(this)"></td><td style="text-align:center;"><span class="totalamounttbl" name="totalamounttbl[]"></span></td></tr>');
addSerialNumber();
$('select').select2();
$('#tblSalesInvoice td ').css('padding','0px 0px');
$('#tblSalesInvoice td ').css('vertical-align','middle');
$('#tblSalesInvoice th ').css('padding','0px 0px');
$(' .select2-container--default .select2-selection--single').css('border','none');
}




$('#tblSalesInvoice').on('click', 'button', function(e){

$(this).closest('tr').remove();
addSerialNumber();
});

//TABLE HANDLING FUNCTIONS
function procode(id, e) { //procode change
	var procode = id.value;
	var tab_index = $(id).closest('tr');
	//tab_index.children('td:nth-child(7)').find('input').val(procode);
	var select2class = "procode";
	getproductdetails(tab_index, procode, select2class); //ajax
}
function proname(id, e) { // name change
	var procode = id.value;
	var tab_index = $(id).closest('tr');
	var select2class = "proname";
	getproductdetails(tab_index, procode, select2class); //ajax

}
function getproductdetails(tab_index,procode,select2class){
// tab_index.children('td:nth-child(7)').find('input').val(procode);
    $.ajax({
data:{productId:procode},
url:'<?=site_url('transactions/SalesInvoice/productViewById');?>',
method:'post',
datatype:'json',
success:function(response){
    jsonobj=$.parseJSON(response);    
    tab_index.children('td:nth-child(5)').find('input').val(jsonobj['hsnOrSacCode']);
    if(select2class=="proname"){
            tab_index.find('.procode').val(procode); 
            tab_index.find('td:nth-child(3) .select2-selection__rendered').attr('title',jsonobj[0]['productCode']);
            tab_index.find('td:nth-child(3) .select2-selection__rendered').html(jsonobj[0]['productCode']);

    }
    else if(select2class=="procode"){
            tab_index.find('.proname').val(procode);
            tab_index.find('td:nth-child(4) .select2-selection__rendered').attr('title',jsonobj[0]['productName']);
            tab_index.find('td:nth-child(4) .select2-selection__rendered').html(jsonobj[0]['productName']);       
            
    }
    tab_index.find('.hsnsac').html(jsonobj[0]['hsnOrSacCode']);
    tab_index.find('.gstpercenttbl').val(jsonobj[0]['taxPercent']);
    tab_index.find('.unit').find('option').remove();
    tab_index.find('.unit').append('<option value="' + jsonobj[0]['unitId'] + '">' + jsonobj[0]['productUnitName'] + '</option>');
    if (jsonobj[0]['conversionUnitIds'] != null) {
        var ids=jsonobj[0]['conversionUnitIds'];
        var names=jsonobj[0]['mainUnitNames'];        
    	var arrUnitId = ids.split(',');
    	var arrUnitName = names.split(',');
        var arrLen=arrUnitId.length;
        for(var i=0; i<arrLen; i++){
            tab_index.find('.unit').append('<option value="' + arrUnitId[i] + '">' + arrUnitName[i] + '</option>');
        }    	
    }
    tab_index.find('.quantity').val('1');
    tab_index.find('.rate').val(jsonobj[0]['retailRate']);
    calculateAmountsByRowIndex(tab_index);
},
});
}

function calculateAmountsByRowIndex(row_index){    
    var qty=row_index.find('.quantity').val();
    var rate=row_index.find('.rate').val();
    var totalAmount=qty*rate;
    row_index.find('.totalamounttbl').html(totalAmount);
}

function callCallculateAmountRow(id){
    var tab_index= $(id).closest('tr');    
    calculateAmountsByRowIndex(tab_index);
}


</script>

</body>
</html>