<!DOCTYPE html>
<html>
<head>
	<title>Passport Stage 3</title>
	<style type="text/css">
		.star{
			color: red;
		}

		hr{
			height: 2px;
			background-color: gray;
		}
	</style>
</head>
<body>
	<h2>PASSPORT APPLICATION - STAGE 3</h2>
	<div style="margin: 15px 20px">
		<p>Online Application ID: 0A4D56687449331</p>
		<p>Fields marked with <span class="star"><em>(*)</em></span> are mandatory.</p>
		<hr>

		<table>
			<tr>
				<td>
					<h3>Payment Information</h3>
					<div style="float: left;">
						<form>
							<label>Payment Type: </label>
							<input type="radio" name="type" value="Online" > Online
							<input type="radio" name="type" value="Non-Online" > Non-Online
						</form>

					</div>
					<div style="clear:both;">&nbsp;</div>
					<div style="float: left;">
						<input type="checkbox" name="" value="skipPayment"><em>Skip Payment</em>
					</div>
					<div style="clear:both;">&nbsp;</div>
					<div>
						<label>Amount: <span class="star">*</span>&nbsp &nbsp &nbsp</label>
						<select>
							<option>BDT</option>
							<option>INR</option>
							<option>USD</option>
							<option>CAD</option>
							<option>EUR</option>
						</select>
						<input type="text" name="" required="">
					</div>
					<div style="clear:both;">&nbsp;</div>
					<div>
						<label>Date of Payment:<span class="star">*</span>&nbsp &nbsp &nbsp</label>
						<input type="text" name="" required="">
					</div>
					<div style="clear:both;">&nbsp;</div>
					<div>
						<form>
							<label>Reciept No:<span class="star">*</span>&nbsp &nbsp &nbsp</label>
							<input type="text" name="" required="">
						</form>
						
					</div>
					<div style="clear:both;">&nbsp;</div>
					<div>
						<label>Name of Bank: &nbsp &nbsp &nbsp</label>
						<select>
							<option>-SELECT-</option>
							<option>Sonali Bank Ltd.</option>
							<option>Janata Bank Ltd.</option>
							<option>Agrani Bank Ltd.</option>
							<option>Rupali Bank Ltd.</option>
							<option>Bangladesh Krishi Bank</option>
							<option>Bangladesh Development Bank Limited.</option>
							<option>Basic Bank Limited</option>						
						</select>
						
					</div>
					<div style="clear:both;">&nbsp;</div>
					<div>
						<label>Name of Branch: &nbsp &nbsp &nbsp</label>
						<select>
							<option></option>
							<option>Jigatola Branch</option>
							<option>Rampura Branch</option>
							<option>Mohakhali Branch</option>
							<option>Johnson Road Branch</option>
							<option>Farmgate Branch</option>
							<option>Asadgate Branch</option>
							<option>Uttara Branch</option>						
						</select>
						
					</div>
					<input type="Submit" name="">
				</td>
			</tr>
		</table>

	</div>

</body>
</html>