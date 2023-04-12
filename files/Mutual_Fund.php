<!DOCTYPE html>
<html>

<head>
	<title>Mutual Fund Details</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<style>
		.onit {
			box-shadow: 3px 3px 10px 1px lightgray;
		}

		.onit:hover {
			background-color: lightgray;
			border: 30px solid red;
			box-shadow: 0 15px 58px rgba(3, 2, 3, .5);
		}
	</style>
</head>

<body>

	<div class="d-inline h-auto">
		<h1 class="position-fixed shadow h-auto w-100 bg-info" ><i>Top 10 Mutual Funds:~</i></h1>

		<!--                                      MF - 1      Quant Small Cap Fund Direct Plan-Growth         -->

		<div class="border h-auto d-inline-block w-auto rounded mt-5 ms-3 p-2 onit">
			<div class=" border-bottom">
				<img src="images/quant.jpg" alt="" style="height: 90px; width: 80px;">
				<div>
					<h6 id="scheme_name"></h6>
				</div>
			</div>
			<br>
			<p><b>Details: </b><br>
				NAV: &nbsp;<samp id="last_nav"> </samp> <br>
				Scheme Type:&nbsp;<samp id="scheme_type"> </samp> </br>
				Scheme Category:&nbsp;<samp id="scheme_category"> </samp><br>
				Scheme Code:&nbsp; <samp id="scheme_code"> </samp>
			</p>
			<p> 1Y Return: 7.82% &nbsp;
				3Y Return: 66.63% &nbsp;
				5Y Return: 23.53% &nbsp;
			</p>
		</div>




		<script>
			apiKey = "https://api.mfapi.in/mf";
			schemeCode = "120828";
			url = `https://api.mfapi.in/mf/${schemeCode}`;

			fetch(url)
				.then(response => response.json())
				.then(data => {

					document.getElementById("scheme_name").innerHTML = data.meta.scheme_name;
					document.getElementById("scheme_type").innerHTML = data.meta.scheme_type;
					document.getElementById("scheme_category").innerHTML = data.meta.scheme_category;
					document.getElementById("scheme_code").innerHTML = data.meta.scheme_code;


					x = document.getElementById("last_nav").innerHTML = data.data[0].nav;
					y = document.getElementById("last_Nav").innerHTML = data.data[249].nav;
					z = (x / y) * 100;
					p = document.getElementById("one").innerHTML = z;


					document.getElementById("last_nav").innerHTML = data.data[0].nav;

				})
				.catch(error => console.error(error));
		</script>


		<!--                                            End Of MF-1                                                      -->
















		<!--                           MF - 2   Tata Digital India Fund Direct-Growth                            -->

		<div class="border h-auto d-inline-block w-auto rounded onit m-3 p-2">
			<div class=" border-bottom">
				<img src="images/tata.jpg" alt="" style="height: 90px; width: 80px;">
				<div>
					<h6 id="schemename"></h6>
				</div>
			</div>
			<br>
			<p><b>Details:</b> <br>
				NAV: &nbsp; <samp id="lastnav"></samp> <br>
				Scheme Type:&nbsp;<samp id="schemetype"> </samp> </br>
				Scheme Category:&nbsp;<samp id="schemecategory"> </samp><br>
				Scheme Code:&nbsp; <samp id="schemecode"> </samp>
			</p>
			<p> 1Y Return: -14.71% &nbsp;
				3Y Return: 41.92% &nbsp;
				5Y Return: 22.84% &nbsp;
			</p>
		</div>




		<script>
			apiKey = "https://api.mfapi.in/mf";
			SchemeCode = "135800";
			url = `https://api.mfapi.in/mf/${SchemeCode}`;

			fetch(url)
				.then(response => response.json())
				.then(data => {

					document.getElementById("schemename").innerHTML = data.meta.scheme_name;
					document.getElementById("schemetype").innerHTML = data.meta.scheme_type;
					document.getElementById("schemecategory").innerHTML = data.meta.scheme_category;
					document.getElementById("schemecode").innerHTML = data.meta.scheme_code;
					document.getElementById("lastnav").innerHTML = data.data[0].nav;

				})
				.catch(error => console.error(error));
		</script>

		<!--                                            End Of MF - 2                                        -->

















		<!--               MF - 3   ICICI Prudential Technology Direct Plan-Growth                         -->

		<div class="border h-auto d-inline-block w-auto rounded onit m-3 p-2">
			<div class=" border-bottom">
				<img src="images/icici.png" alt="" style="height: 90px; width: 80px;">
				<div>
					<h6 id="s_chemeNAme"></h6>
				</div>
			</div>
			<br>
			<p><b>Details: </b><br>
				NAV: &nbsp;<samp id="l_astNAV"></samp> <br>
				Scheme Type:&nbsp;<samp id="s_chemetype"> </samp> </br>
				Scheme Category:&nbsp;<samp id="s_chemecategory"> </samp><br>
				Scheme Code:&nbsp; <samp id="s_chemecode"> </samp>
			</p>
			<p> 1Y Return: -16.11% &nbsp;
				3Y Return: 47.18% &nbsp;
				5Y Return: 22.44%&nbsp;
			</p>
		</div>




		<script>
			apiKey = "https://api.mfapi.in/mf";
			schemeCode = "120594";
			url = `https://api.mfapi.in/mf/${schemeCode}`;

			fetch(url)
				.then(response => response.json())
				.then(data => {

					document.getElementById("s_chemeNAme").innerHTML = data.meta.scheme_name;
					document.getElementById("s_chemetype").innerHTML = data.meta.scheme_type;
					document.getElementById("s_chemecategory").innerHTML = data.meta.scheme_category;
					document.getElementById("s_chemecode").innerHTML = data.meta.scheme_code;
					document.getElementById("l_astNAV").innerHTML = data.data[0].nav;

				})
				.catch(error => console.error(error));
		</script>

		<!--                                      End Of MF - 3                                                 -->
















		<!--          MF - 4     Quant Tax Plan Direct-Growth                                           -->

		<div class="border h-auto d-inline-block w-auto rounded onit m-3 p-2">
			<div class=" border-bottom">
				<img src="images/quant.jpg" alt="" style="height: 90px; width: 80px;">
				<div>
					<h6 id="Schemename"></h6>
				</div>
			</div>
			<br>
			<p><b>Details: </b><br>
				NAV: &nbsp;<samp id="Lastnav"></samp> <br>
				Scheme Type:&nbsp;<samp id="Schemetype"> </samp> </br>
				Scheme Category:&nbsp;<samp id="Schemecategory"> </samp><br>
				Scheme Code:&nbsp; <samp id="Schemecode"> </samp>
			</p>
			<p> 1Y Return: 5.34% &nbsp;
				3Y Return: 52.8% &nbsp;
				5Y Return: 22.41% &nbsp;
			</p>
		</div>




		<script>
			apiKey = "https://api.mfapi.in/mf";
			schemeCode = "120847";
			url = `https://api.mfapi.in/mf/${schemeCode}`;

			fetch(url)
				.then(response => response.json())
				.then(data => {

					document.getElementById("Schemename").innerHTML = data.meta.scheme_name;
					document.getElementById("Schemetype").innerHTML = data.meta.scheme_type;
					document.getElementById("Schemecategory").innerHTML = data.meta.scheme_category;
					document.getElementById("Schemecode").innerHTML = data.meta.scheme_code;
					document.getElementById("Lastnav").innerHTML = data.data[0].nav;

				})
				.catch(error => console.error(error));
		</script>

		<!--                                      End Of MF - 4                                                 -->















		<!--              MF - 5     SBI Technology Opportunities Fund Direct-Growth                                           -->

		<div class="border h-auto d-inline-block w-auto rounded onit m-3 p-2">
			<div class=" border-bottom">
				<img src="images/sbi.png" alt="" style="height: 90px; width: 80px;">
				<div>
					<h6 id="Scheme"></h6>
				</div>
			</div>
			<br>
			<p><b>Details: </b><br>
				NAV: &nbsp;<samp id="Last"></samp> <br>
				Scheme Type:&nbsp;<samp id="type"> </samp> </br>
				Scheme Category:&nbsp;<samp id="category"> </samp><br>
				Scheme Code:&nbsp; <samp id="code"> </samp>
			</p>
			<p> 1Y Return: -7.19% &nbsp;
				3Y Return: 40.11% &nbsp;
				5Y Return: 21.73% &nbsp;
			</p>
		</div>




		<script>
			apiKey = "https://api.mfapi.in/mf";
			schemeCode = "120578";
			url = `https://api.mfapi.in/mf/${schemeCode}`;

			fetch(url)
				.then(response => response.json())
				.then(data => {

					document.getElementById("Scheme").innerHTML = data.meta.scheme_name;
					document.getElementById("type").innerHTML = data.meta.scheme_type;
					document.getElementById("category").innerHTML = data.meta.scheme_category;
					document.getElementById("code").innerHTML = data.meta.scheme_code;
					document.getElementById("Last").innerHTML = data.data[0].nav;

				})
				.catch(error => console.error(error));
		</script>

		<!--                                      End Of MF - 5                                                 -->
















		<!--      MF - 6   Aditya Birla Sun Life Digital India Fund Direct-Growth                        -->

		<div class="border h-auto d-inline-block w-auto rounded onit m-3 p-2">
			<div class=" border-bottom">
				<img src="images/aditya.png" alt="" style="height: 90px; width: 80px;">
				<div>
					<h6 id="Schemead"></h6>
				</div>
			</div>
			<br>
			<p><b>Details: </b><br>
				NAV: &nbsp;<samp id="Lastad"></samp> <br>
				Scheme Type:&nbsp;<samp id="sctype"> </samp> </br>
				Scheme Category:&nbsp;<samp id="sccategory"> </samp><br>
				Scheme Code:&nbsp; <samp id="sccode"> </samp>
			</p>
			<p> 1Y Return: -11.97% &nbsp;
				3Y Return: 41.36% &nbsp;
				5Y Return: 21.63% &nbsp;
			</p>
		</div>




		<script>
			apiKey = "https://api.mfapi.in/mf";
			schemeCode = "120539";
			url = `https://api.mfapi.in/mf/${schemeCode}`;

			fetch(url)
				.then(response => response.json())
				.then(data => {

					document.getElementById("Schemead").innerHTML = data.meta.scheme_name;
					document.getElementById("sctype").innerHTML = data.meta.scheme_type;
					document.getElementById("sccategory").innerHTML = data.meta.scheme_category;
					document.getElementById("sccode").innerHTML = data.meta.scheme_code;
					document.getElementById("Lastad").innerHTML = data.data[0].nav;

				})
				.catch(error => console.error(error));
		</script>

		<!--                                      End Of MF - 6                                                 -->















		<!--         MF - 7   Quant Infrastructure Fund Direct-Growth                                           -->

		<div class="border h-auto d-inline-block w-auto rounded onit m-3 p-2">
			<div class=" border-bottom">
				<img src="images/quant.jpg" alt="" style="height: 90px; width: 80px;">
				<div>
					<h6 id="SchemeQa"></h6>
				</div>
			</div>
			<br>
			<p><b>Details:</b> <br>
				NAV: &nbsp;<samp id="LastQa"></samp> <br>
				Scheme Type:&nbsp;<samp id="sc_type"> </samp> </br>
				Scheme Category:&nbsp;<samp id="sc_category"> </samp><br>
				Scheme Code:&nbsp; <samp id="sc_code"> </samp>
			</p>
			<p> 1Y Return: 8.18% &nbsp;
				3Y Return: 57.62% &nbsp;
				5Y Return: 21.06% &nbsp;
			</p>
		</div>




		<script>
			apiKey = "https://api.mfapi.in/mf";
			schemeCode = "120833";
			url = `https://api.mfapi.in/mf/${schemeCode}`;

			fetch(url)
				.then(response => response.json())
				.then(data => {

					document.getElementById("SchemeQa").innerHTML = data.meta.scheme_name;
					document.getElementById("sc_type").innerHTML = data.meta.scheme_type;
					document.getElementById("sc_category").innerHTML = data.meta.scheme_category;
					document.getElementById("sc_code").innerHTML = data.meta.scheme_code;
					document.getElementById("LastQa").innerHTML = data.data[0].nav;

				})
				.catch(error => console.error(error));
		</script>

		<!--                                      End Of MF - 7                                                 -->

















		<!--      MF - 8      Quant Mid Cap Fund Direct-Growth                                          -->

		<div class="border h-auto d-inline-block w-auto rounded onit m-3 p-2">
			<div class="border-bottom">
				<img src="images/quant.jpg" alt="" style="height: 90px; width: 80px;">
				<div>
					<h6 id="SchemeQ"></h6>
				</div>
			</div>
			<br>
			<p><b>Details: </b><br>
				NAV: &nbsp;<samp id="LastQ"></samp> <br>
				Scheme Type:&nbsp;<samp id="sch_type"> </samp> </br>
				Scheme Category:&nbsp;<samp id="sch_category"> </samp><br>
				Scheme Code:&nbsp; <samp id="sch_code"> </samp>
			</p>
			<p> 1Y Return: 9.22% &nbsp;
				3Y Return: 47.14% &nbsp;
				5Y Return: 20.09% &nbsp;
			</p>
		</div>




		<script>
			apiKey = "https://api.mfapi.in/mf";
			schemeCode = "120841";
			url = `https://api.mfapi.in/mf/${schemeCode}`;

			fetch(url)
				.then(response => response.json())
				.then(data => {

					document.getElementById("SchemeQ").innerHTML = data.meta.scheme_name;
					document.getElementById("sch_type").innerHTML = data.meta.scheme_type;
					document.getElementById("sch_category").innerHTML = data.meta.scheme_category;
					document.getElementById("sch_code").innerHTML = data.meta.scheme_code;
					document.getElementById("LastQ").innerHTML = data.data[0].nav;

				})
				.catch(error => console.error(error));
		</script>

		<!--                                      End Of MF - 8                                                 -->



















		<!--          MF - 9  Quant Active Fund Direct-Growth                                           -->

		<div class="border h-auto d-inline-block w-auto rounded onit m-3 p-2">
			<div class="border-bottom">
				<img src="images/quant.jpg" alt="" style="height: 90px; width: 80px;">
				<div>
					<h6 id="Scheme_q"></h6>
				</div>
			</div>
			<br>
			<p><b>Details:</b> <br>
				NAV: &nbsp;<samp id="Last_q"></samp> <br>
				Scheme Type:&nbsp;<samp id="scheme_t"> </samp> </br>
				Scheme Category:&nbsp;<samp id="scheme_c"> </samp><br>
				Scheme Code:&nbsp; <samp id="scheme_co"> </samp>
			</p>
			<p> 1Y Return: 1.5% &nbsp;
				3Y Return: 47.41% &nbsp;
				5Y Return: 20.02% &nbsp;
			</p>
		</div>




		<script>
			apiKey = "https://api.mfapi.in/mf";
			schemeCode = "120823";
			url = `https://api.mfapi.in/mf/${schemeCode}`;

			fetch(url)
				.then(response => response.json())
				.then(data => {

					document.getElementById("Scheme_q").innerHTML = data.meta.scheme_name;
					document.getElementById("scheme_t").innerHTML = data.meta.scheme_type;
					document.getElementById("scheme_c").innerHTML = data.meta.scheme_category;
					document.getElementById("scheme_co").innerHTML = data.meta.scheme_code;
					document.getElementById("Last_q").innerHTML = data.data[0].nav;

				})
				.catch(error => console.error(error));
		</script>

		<!--                                      End Of MF - 9                                                 -->














		<!--           MF - 10  Axis Small Cap Fund Direct-Growth                                              -->

		<div class="border h-auto d-inline-block w-auto rounded onit m-3 p-2">
			<div class="border-bottom">
				<img src="images/axis.jpg" alt="" style="height: 90px; width: 80px;">
				<div>
					<h6 id="SchemeAx"></h6>
				</div>
			</div>
			<br>
			<p><b>Details: </b><br>
				NAV: &nbsp;<samp id="LastAx"></samp> <br>
				Scheme Type:&nbsp;<samp id="scheme_ty"> </samp> </br>
				Scheme Category:&nbsp;<samp id="scheme_ca"> </samp><br>
				Scheme Code:&nbsp; <samp id="scheme_cod"> </samp>
			</p>
			<p> 1Y Return: 3.71% &nbsp;
				3Y Return: 33.42% &nbsp;
				5Y Return: 19.39% &nbsp;
			</p>
		</div>




		<script>
			apiKey = "https://api.mfapi.in/mf";
			schemeCode = "125354";
			url = `https://api.mfapi.in/mf/${schemeCode}`;

			fetch(url)
				.then(response => response.json())
				.then(data => {

					document.getElementById("SchemeAx").innerHTML = data.meta.scheme_name;
					document.getElementById("scheme_ty").innerHTML = data.meta.scheme_type;
					document.getElementById("scheme_ca").innerHTML = data.meta.scheme_category;
					document.getElementById("scheme_cod").innerHTML = data.meta.scheme_code;
					document.getElementById("LastAx").innerHTML = data.data[0].nav;

				})
				.catch(error => console.error(error));
		</script>

		<!--                                      End Of MF - 10                                                 -->



	</div>
</body>

</html>