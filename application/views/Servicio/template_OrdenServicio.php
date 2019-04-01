<div class="content-body">
    <section class="card">
<div id="invoice-template" class="card-block">
		<!-- Invoice Company Details -->
		<div id="invoice-company-details" class="row">
			<div class="col-md-6 col-sm-12 text-xs-center text-md-left">
				<img src="../../app-assets/images/logo/SigueMEDLogo.png" alt="company logo" class=""/>
				<ul class="px-0 list-unstyled">
					<li class="text-bold-800">Clínica SiguéMed</li>
					<li>4025 Oak Avenue,</li>
					<li>Melbourne,</li>
					<li>Florida 32940,</li>
					<li>USA</li>
				</ul>
			</div>
			<div class="col-md-6 col-sm-12 text-xs-center text-md-right">
				<h2>Recibo</h2>
                                <p class="pb-3"># REC-<label id="NumeroRecibo"></label></p>
				<ul class="px-0 list-unstyled">
					<li>Total Recibo</li>
                                        <li class="lead text-bold-800">$ <label class="lead text-bold-800" id="TotalRecibo"></label></li>
				</ul>
			</div>
		</div>
		<!--/ Invoice Company Details -->

		<!-- Invoice Customer Details -->
		<div id="invoice-customer-details" class="row pt-2">
			<div class="col-sm-12 text-xs-center text-md-left">
				<p class="text-muted">Cliente</p>
			</div>
			<div class="col-md-6 col-sm-12 text-xs-center text-md-left">
				<ul class="px-0 list-unstyled">
                                    <li class="text-bold-800"><label class="text-bold-800" id="NombreCliente"></label></li>
					<li>4879 Westfall Avenue,</li>
					<li>Albuquerque,</li>
					<li>New Mexico-87102.</li>
				</ul>
			</div>
			<div class="col-md-6 col-sm-12 text-xs-center text-md-right">
				<p><span class="text-muted">Fecha Recibo :</span> 06/05/2016</p>
				<p><span class="text-muted">Estatus Recibo :</span> Due on Receipt</p>
				<p><span class="text-muted">Fecha Vencimiento :</span> 10/05/2016</p>
			</div>
		</div>
		<!--/ Invoice Customer Details -->

		<!-- Invoice Items Details -->
		<div id="invoice-items-details" class="pt-2">
			<div class="row">
				<div class="table-responsive col-sm-12">
					<table class="table">
					  <thead>
					    <tr>
					      <th>#</th>
					      <th>Servicio y Producto</th>
					      <th class="text-xs-right">Costo Uni.</th>
					      <th class="text-xs-right">Descuento</th>
					      <th class="text-xs-right">SubTotal</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>
					      	<p>Create PSD for mobile APP</p>
					      	<p class="text-muted">Simply dummy text of the printing and typesetting industry.</p>
					      </td>
					      <td class="text-xs-right">$ 20.00/hr</td>
					      <td class="text-xs-right">120</td>
					      <td class="text-xs-right">$ 2400.00</td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>
					      	<p>iOS Application Development</p>
					      	<p class="text-muted">Pellentesque maximus feugiat lorem at cursus.</p>
					      </td>
					      <td class="text-xs-right">$ 25.00/hr</td>
					      <td class="text-xs-right">260</td>
					      <td class="text-xs-right">$ 6500.00</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>
					      	<p>WordPress Template Development</p>
					      	<p class="text-muted">Vestibulum euismod est eu elit convallis.</p>
					      </td>
					      <td class="text-xs-right">$ 20.00/hr</td>
					      <td class="text-xs-right">300</td>
					      <td class="text-xs-right">$ 6000.00</td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-sm-12 text-xs-center text-md-left">
					<p class="lead">Payment Methods:</p>
					<div class="row">
						<div class="col-md-8">
						<table class="table table-borderless table-sm">
							<tbody>
								<tr>
									<td>Bank name:</td>
									<td class="text-xs-right">ABC Bank, USA</td>
								</tr>
								<tr>
									<td>Acc name:</td>
									<td class="text-xs-right">Amanda Orton</td>
								</tr>
								<tr>
									<td>IBAN:</td>
									<td class="text-xs-right">FGS165461646546AA</td>
								</tr>
								<tr>
									<td>SWIFT code:</td>
									<td class="text-xs-right">BTNPP34</td>
								</tr>
							</tbody>
						</table>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-12">
					<p class="lead">Total due</p>
					<div class="table-responsive">
						<table class="table">
						  <tbody>
						  	<tr>
						  		<td>Sub Total</td>
						  		<td class="text-xs-right">$ 14,900.00</td>
						  	</tr>
						  	<tr>
						  		<td>TAX (12%)</td>
						  		<td class="text-xs-right">$ 1,788.00</td>
						  	</tr>
						  	<tr>
						  		<td class="text-bold-800">Total</td>
						  		<td class="text-bold-800 text-xs-right"> $ 16,688.00</td>
						  	</tr>
						  	<tr>
						  		<td>Payment Made</td>
						  		<td class="pink text-xs-right">(-) $ 4,688.00</td>
						  	</tr>
						  	<tr class="bg-grey bg-lighten-4">
						  		<td class="text-bold-800">Balance Due</td>
						  		<td class="text-bold-800 text-xs-right">$ 12,000.00</td>
						  	</tr>
						  </tbody>
						</table>
					</div>
					<div class="text-xs-center">
						<p>Authorized person</p>
						<img src="../../app-assets/images/pages/signature-scan.png" alt="signature" class="height-100"/>
						<h6>Amanda Orton</h6>
						<p class="text-muted">Managing Director</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Invoice Footer -->
		<div id="invoice-footer">
			<div class="row">
				<div class="col-md-7 col-sm-12">
					<h6>Terms & Condition</h6>
					<p>You know, being a test pilot isn't always the healthiest business in the world. We predict too much for the next year and yet far too little for the next 10.</p>
				</div>
				<div class="col-md-5 col-sm-12 text-xs-center">
					<button type="button" class="btn btn-primary btn-lg my-1"><i class="icon-paperplane"></i> Send Invoice</button>
				</div>
			</div>
		</div>
		<!--/ Invoice Footer -->

	</div>
</section>
        </div>
<script type="text/javascript">
    $(document).ready(function()
    {
        var IdRecibo = <?php echo $IdNotaRemision;?>;
        CargarInformacionRecibo(IdRecibo);
        
    }
            
    );
    
    function CargarInformacionRecibo(IdRecibo)
    {
       
        $.ajax({
                url: "<?php echo site_url();?>/NotaRemision_Controller/ConsultarNotaRemision_ajax",
                method: "POST",
                data:{IdNotaRemision:IdRecibo},
                success: function(data)
                    {     
                        var NotaRemision = JSON.parse(data);
                        $("#NumeroRecibo").html(NotaRemision['IdNotaRemision']);
                        $("#TotalRecibo").html(NotaRemision['TotalNotaRemision']);
                        $("#NombreCliente").html(NotaRemision['NombrePaciente']);
                    }
            });
    }
</script>
      