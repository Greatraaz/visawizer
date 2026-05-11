<style>
.invoice-box {
  margin: 10px !important;
  border: 1px solid #333;
  padding: 24px;
  font-size: 14px;
  line-height: 1.5;
  color: #000;
  background: #fff;
  border-radius: 6px;
}

.invoice-box p {
  line-height: 18px;
  font-size: 14px;
  margin-bottom: 4px;
}

.invoice-box h5 {
  margin-bottom: 6px;
}

hr {
  border-top: 1px solid #999;
}

.table {
  margin-top: 15px;
}

.table-bordered th {
  background: #2f4f4f !important;
  color: #fff;
  font-size: 13px;
  padding: 10px !important;
  text-align: center;
}

.table-bordered td {
  border: 1px solid #000 !important;
  padding: 9px !important;
  font-size: 13px;
}

.text-right {
  text-align: right;
}

.text-end {
  text-align: right;
}

.mngpp p {
  margin-bottom: 3px;
}

.printBtn {
  margin-left: auto;
  display: flex;
  gap: 8px;
}

.printBtn button {
  background: var(--theme-color-3);
  width: 38px;
  height: 38px;
  border-radius: 6px;
  color: #fff;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.printBtn button:hover {
  background: #1d4528;
}

.modal-header {
  border-bottom: 1px solid #ddd;
}

.modal-title {
  color: var(--theme-color-3);
}

/* Signature section */
.signature-box img {
  margin: 8px 0;
}

/* PRINT */
@media print {
  body {
    background: #fff;
  }

  .invoice-box {
    border: none;
    padding: 0;
  }

  table {
    border-collapse: collapse !important;
    width: 100% !important;
  }

  table, th, td {
    border: 1px solid #000 !important;
    font-size: 12px;
  }

  th, td {
    padding: 7px !important;
  }

  .printBtn,
  .btn-close {
    display: none !important;
  }
}
</style>

<div class="modal-header">
    <h1 class="modal-title fs-2 fw-bold">Order Invoice</h1>
    <div class="printBtn">
	    <button type="button" onclick="printInvoice()"><i class="fa fa-print"></i></button>
	    <button type="button" onclick="savePDF()"><i class="fa fa-download"></i></button>
    </div>
    <button type="button" class="btn-close" onclick="hideModal();"></button>
</div>
<div class="modal-body pt-0" id="invoiceContent">
	<div class="my-3 invoice-box">

	    <div class="row">
	        <div class="col-6">
	            <img src="{{ asset('assets/images/logo.png') }}" style="width: 118px;">
	        </div>
	        <div class="col-6 text-end">
	            <h6 class="mb-1"><b>Tax Invoice / Bill of Supply / Cash Memo</b></h6>
				<p class="mb-0 text-muted">(Original for Recipient)</p>
	            <b>Place of supply: </b> {{ $invoice->state }}
	        </div>
	    </div>
	    <hr>

	    <div class="row mb-3">
	        <div class="col-6">
	        	<div class="mngpp">
		            <h5><b>Sold By :</b></h5>
		            <p>Evolvia Consultants and Advisors (OPC) Private Limited</p>
		            <p>{{ config('site.address1') }}</p>
	                <p><b>GST Registration No: </b>09AAICE9869L1ZM</p>
	                <p><b>Invoice Number:</b> {{ $invoice->invoiceNo }}</p>
	                <p><b>Invoice Date:</b> {{ \Carbon\Carbon::parse($invoice->date)->format('d M, Y') }}</p>
	            </div>
	        </div>
	        <div class="col-6 text-end">
	        	<div class="mngpp">
	                <h5><b>Billing Address :</b></h5>
	                <p>{{ $invoice->username }}</p>
	                <p>{{ $invoice->mobile }}</p>
	                <p>{{ $invoice->email }}</p>
	                <p>{{ $invoice->state }}</p>
	                @if(!empty($invoice->gstno))
	                <p><b>GSTNo:</b> {{ $invoice->gstno }}</p>
	                @endif
	            </div>
	        </div>
	    </div>
	    @php $product = json_decode($invoice->productDetail); @endphp
	    @if(isset($product->minPrice) && $product->minPrice != '')
	    <table class="table table-bordered align-middle">
	        <thead class="text-center">
	            <tr>
	                <th>Sr. No.</th>
	                <th>Description</th>
	                <th>Unit Price</th>
	                <th>Qty</th>
	                <th>Pay Amount</th>
	                <th>Tax Rate</th>
	                <th>Tax Type</th>
	                <th>Tax Amount</th>
	                <th>Total Amount</th>
	            </tr>
	        </thead>
	        <tbody>
	        	
	          @if(!is_null($invoice['igst']))
						    <tr>
						        <td>1</td>
						        <td>{{ $product->title }}</td>
						        <td class="text-center">₹{{ $product->price }}</td>
						        <td class="text-center">1</td>
						        <td class="text-center">₹{{ $product->minPrice }}</td>
						        <td class="text-center">18%</td>
						        <td class="text-center">IGST</td>
						        <td class="text-center">₹{{ $invoice['igst'] }}</td>
						        <td class="text-end">₹{{ $invoice['totalAmount'] }}</td>
						    </tr>
						    <tr>
						        <td colspan="8" class="text-end"><b>TOTAL:</b></td>
						        <td class="text-end">
						            <b>₹{{ $invoice['subTotal'] }}</b>
						        </td>
						    </tr>
						@else
						    <tr>
						        <td rowspan="2">1</td>
						        <td rowspan="2">{{ $product->title }}</td>
						        <td rowspan="2" class="text-center">₹{{ $product->price }}</td>
						        <td rowspan="2" class="text-center">1</td>
						        <td rowspan="2" class="text-center">₹{{ $product->minPrice }}</td> 
						        <td class="text-center">9%</td>
						        <td class="text-center">CGST</td>
						        <td class="text-center">₹{{ $invoice['cgst'] }}</td>
						        <td rowspan="2" class="text-end">₹{{ $invoice['totalAmount'] }}</td>
						    </tr>
						    <tr>
						        <td class="text-center">9%</td>
						        <td class="text-center">SGST</td>
						        <td class="text-center">₹{{ $invoice['sgst'] }}</td>
						    </tr>
						    <tr>
						        <td colspan="7" class="text-end"><b>TOTAL:</b></td>
						        <td class="text-center">
						            <b>₹{{ $invoice['cgst'] + $invoice['sgst'] }}</b>
						        </td>
						        <td class="text-end">
						            <b>₹{{ $invoice['subTotal'] }}</b>
						        </td>
						    </tr>
						@endif

	        </tbody>
	    </table>
	    @else
	    <table class="table table-bordered align-middle">
	        <thead class="text-center">
	            <tr>
	                <th>Sr. No.</th>
	                <th>Description</th>
	                <th>Unit Price</th>
	                <th>Qty</th>
	                <th>Tax Rate</th>
	                <th>Tax Type</th>
	                <th>Tax Amount</th>
	                <th>Total Amount</th>
	            </tr>
	        </thead>
	        <tbody>
	        	
	          @if(!is_null($invoice['igst']))
						    <tr>
						        <td>1</td>
						        <td>{{ $product->title }}</td>
						        <td class="text-center">₹{{ $product->price }}</td>
						        <td class="text-center">1</td>
						        <td class="text-center">18%</td>
						        <td class="text-center">IGST</td>
						        <td class="text-center">₹{{ $invoice['igst'] }}</td>
						        <td class="text-end">₹{{ $invoice['totalAmount'] }}</td>
						    </tr>
						    <tr>
						        <td colspan="7" class="text-end"><b>TOTAL:</b></td>
						        <td class="text-end">
						            <b>₹{{ $invoice['subTotal'] }}</b>
						        </td>
						    </tr>
						@else
						    <tr>
						        <td rowspan="2">1</td>
						        <td rowspan="2">{{ $product->title }}</td>
						        <td rowspan="2" class="text-center">₹{{ $product->price }}</td>
						        <td rowspan="2" class="text-center">1</td>
						        <td class="text-center">9%</td>
						        <td class="text-center">CGST</td>
						        <td class="text-center">₹{{ $invoice['cgst'] }}</td>
						        <td rowspan="2" class="text-end">₹{{ $invoice['subTotal'] }}</td>
						    </tr>
						    <tr>
						        <td class="text-center">9%</td>
						        <td class="text-center">SGST</td>
						        <td class="text-center">₹{{ $invoice['sgst'] }}</td>
						    </tr>
						    <tr>
						        <td colspan="6" class="text-end"><b>TOTAL:</b></td>
						        <td class="text-center">
						            <b>₹{{ $invoice['cgst'] + $invoice['sgst'] }}</b>
						        </td>
						        <td class="text-end">
						            <b>₹{{ $invoice['totalAmount'] }}</b>
						        </td>
						    </tr>
						@endif

	        </tbody>
	    </table>
	    @endif
	    <div class="row mt-5">
	    	<div class="col-md-12 text-end signature-box">
			  <p class="mb-1"><strong>For Evolvia Consultants and Advisors (OPC) Private Limited</strong></p>
			  <img src="https://dummyimage.com/120x40/cccccc/000000&text=Signature">
			  <p class="mb-0">Authorized Signatory</p>
			</div>

	    </div>
	</div>
<style>
@media print {
	.invoice-box p{
		line-height: 14px;
	  font-size: 12px;
	}
    table {
        border-collapse: collapse !important;
        width: 100% !important;
    }
    table, th, td {
        border: 1px solid #000 !important;
        font-size: 12px;
    }
    th, td {
        padding: 8px !important;
        font-size: 12px;
    }

}
</style>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<script>
function printInvoice() {
    var printContents = document.getElementById("invoiceContent").innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}

function savePDF() {
		$('.spinner-container').show(); 
    var element = document.getElementById('invoiceContent');

    var opt = {
        margin:       [10, 10, 10, 10], // top right bottom left (mm)
        filename:     'Invoice_{{ $invoice->invoiceNo }}.pdf',
        image:        { type: 'jpeg', quality: 1 },
        html2canvas:  {
            scale: 1,
            useCORS: true,
            scrollY: 0
        },
        jsPDF: {
            unit: 'mm',
            format: 'a4',
            orientation: 'portrait'
        }
    };

    html2pdf().set(opt).from(element).save().then(() => {
        $('.spinner-container').hide(); 
    });
}
</script>