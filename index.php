<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Kanit&effect=shadow-multiple" rel="stylesheet">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<title>SSO WebService</title>

	<style type="text/css">
		body {
			font-family: 'Kanit', sans-serif;
		}
	</style>
</head>
<body>
	<div class="container">
		<!-- Content here -->
		<h1 style="text-align: center; padding-top: 25px; padding-bottom: 25px;">SSO WebService</h1>

		<div class="card">
			<div class="card-header">
				<b>ความรู้เบื้องต้นเกี่ยวกับ XML-RPC</b>
			</div>
			<div class="card-body">
				<h5 class="card-title"><b>XML-RPC Service</b></h5>
				<p class="card-text"><b>XML</b> - Extensible Markup Language<br>
				XML เป็นภาษาที่ถูกออกแบบขึ้นมาเพื่อทำการแลกเปลี่ยนข้อมูลผ่านเครือข่ายอินเทอร์เน็ต และสามารถรองรับการเเลกเปลี่ยนได้หลายภาษา หากจะให้เข้าใจง่าย ๆ ก็ยกตัวอย่างเช่น คนหลายชาติต่างภาษาเลือกที่จะทำการศึกษาภาษาอังกฤษในการสื่อสารกับชาติต่าง ๆ เพราะภาษาอังกฤษถือเป็นภาษากลาง เเทนที่จะทำการศึกษาเพียงภาษาใดภาษาหนึ่ง เพราะหากสามารถเข้าใจภาษากลางเพียงภาษาเดียวเเล้ว ก็จะสามารถสื่อสารได้กับทุกชาติ เพราะฉนั้น XML จึงเปรียบเสมือนภาษากลาง</p>

				<p class="card-text"><b>RPC</b> - Remote Procedure Calls<br>
				RPC เป็นโปรโตคอลตัวหนึ่งมีหน้าที่เรียกขอใช้บริการและตอบรับคำขอใช้บริการ procedure หรือโปรแกรมที่อยู่บนเครื่องอื่นในเครือข่ายเดียวกันและยังเป็นโปรโตคอลหลักในโครงสร้างแบบ ลูกข่าย/แม่ข่าย (client/server) ด้วย</p>

				<p class="card-text">สรุปได้ว่า XML-RPC ก็เป็นโปรโตคอล RPC ที่ใช้ XML เข้ารหัสการเรียกใช้ และส่งข้อมูลด้วย HTTP (HyperText Transfer Protocol) การมีข้อดีของ XML และมีการทำงานเป็น RPC ทำให้ XML-RPC สามารถเชื่อมการติดต่อระหว่างเครื่องคอมพิวเตอร์ที่มีระบบปฏิบัติการต่างกัน และช่วยให้โปรแกรมที่เขียนขึ้นด้วยคนละภาษาสามารถทำงานร่วมกันได้ เช่น PHP ทำงานร่วมกับ Python, Perl ติดต่อกับ Java</p>

				<p class="card-text">อ้างอิง : <a href="https://mdsoft.co.th/%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%A3%E0%B8%B9%E0%B9%89/145-xml-rpc.html">ความรู้เบื้องต้นเกี่ยวกับ XML-RPC</a></p>
				<a href="https://github.com/EKAPHONG/XML-RPC-Service" class="btn btn-dark">Go to GitHub</a>
			</div>
		</div>

		<div class="card mt-3">
			<div class="card-header">
				<b>คำสั่งเรียกใช้ Class</b>
			</div>
			<div class="card-body">
				<h5 class="card-title">XML-RPC</h5>
				<p class="card-text">นำโค้ดด้านล่างนี้ไว้ส่วนบนสุดของไฟล์
					<div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #75715e">&lt;?php</span><br><span style="color: #75715e">// Configuration, please do not edit if you do not understand the system.</span><br><span style="color: #66d9ef">use</span> <span style="color: #a6e22e">EKAPHONG\XML_RPC</span><span style="color: #f8f8f2">;</span><br><span style="color: #66d9ef">require_once</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">__DIR__</span> <span style="color: #f92672">.</span> <span style="color: #e6db74">&#39;/class/XML_RPC.php&#39;</span><span style="color: #f8f8f2">);</span><br><span style="color: #66d9ef">require_once</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">__DIR__</span> <span style="color: #f92672">.</span> <span style="color: #e6db74">&#39;/config/config.php&#39;</span><span style="color: #f8f8f2">);</span><br><span style="color: #f8f8f2">$xmlrpc</span> <span style="color: #f92672">=</span> <span style="color: #66d9ef">new</span> <span style="color: #a6e22e">XML_RPC</span><span style="color: #f8f8f2">();</span><br><span style="color: #75715e">// End of configuration</span></pre></div>
				</p>
			</div>
		</div>

		<h2 class="mt-5">Methods</h2>

		<div class="card">
			<div class="card-header">
				<b>บริการเข้ารหัสข้อมูล</b>
			</div>
			<div class="card-body">
				<h5 class="card-title">getEncrypt</h5>
				<p class="card-text">
					<div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f8f8f2">$output</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">$xmlrpc</span><span style="color: #f92672">-&gt;</span><span style="color: #a6e22e">getEncrypt</span><span style="color: #f8f8f2">($server,</span> <span style="color: #f8f8f2">$app_id,</span> <span style="color: #f8f8f2">$secret,</span> <span style="color: #e6db74">&quot;hello world&quot;</span><span style="color: #f8f8f2">);</span><br><br><span style="color: #f8f8f2">print_r($output);</span></pre></div>
				</p>
				<p class="card-text">
					Output :
					<div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f8f8f2">4451734c5168314e416873625167553d</span></pre></div>
				</p>
			</div>
		</div>

		<div class="card mt-3">
			<div class="card-header">
				<b>บริการถอดรหัสข้อมูล</b>
			</div>
			<div class="card-body">
				<h5 class="card-title">getDecrypt</h5>
				<p class="card-text">
					<div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f8f8f2">$output</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">$xmlrpc</span><span style="color: #f92672">-&gt;</span><span style="color: #a6e22e">getDecrypt</span><span style="color: #f8f8f2">($server,</span> <span style="color: #f8f8f2">$app_id,</span> <span style="color: #f8f8f2">$secret,</span> <span style="color: #e6db74">&quot;4451734c5168314e416873625167553d&quot;</span><span style="color: #f8f8f2">);</span><br><br><span style="color: #f8f8f2">print_r($output);</span></pre></div>
				</p>
				<p class="card-text">
					Output :
					<div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f8f8f2">hello world</span></pre></div>
				</p>
			</div>
		</div>

	</div>

	<div class="container-fluid mt-3" style="background-color: #666;">
		<div class="container" style="color: white; padding-bottom: 25px; padding-top: 25px;">
			© <?php echo(date("Y")); ?> | EKAPHONG TANGTRAKUL <a href="https://m.me/t.ekaphong" target="_blank"><img src="https://static.xx.fbcdn.net/rsrc.php/y7/r/O6n_HQxozp9.ico" style="width: 20px;"></a> <a href="https://github.com/EKAPHONG/XML-RPC-Service" target="_blank"><img src="https://github.githubassets.com/favicon.ico" style="width: 16px; fill: white;"></a>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
