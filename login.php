<?php
if(!defined("CORE")):
define("PATH", dirname(__FILE__)."/");
define("CORE", PATH."classes/autoload.class.php");
endif;
require_once(CORE);
$autoload = new Autoload;
echo $autoload->Html("Empmarker v1.0 Login");
?>
	<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
<div class="top-white">
		<div class="d-flex">
		<strong> Empmark Admin Login</strong>
		<div class="ml-auto">
			<button class="btn-link" style="background: transparent; border: 1px solid #ddd; border-radius: 2px;" data-toggle="modal" data-target="#newemp"> <span class="fa fa-info-circle"></span> Help </button>
			</div>
		</div>
	</div>
	<div class="back-white">
		<div class="container py-3 lato">
		<label> Username </label>
		<input id="a" type="text" class="form-control form-group" placeholder="Admin500">
			<label> Password </label>
		<input id="b" type="password" class="form-control form-group pass-check" placeholder="******">
			<div class="media">
				<div class="media-body">
					  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span id="passtoggle" class="input-group-text"> <i class="fa fa-eye"></i> </span>
    </div>
<button type="button" onclick="passcook()" class="form-btn"> Password
  </div>
			</div>
			<div class="right text-right">
			<button class="btn btn-primary" onclick="log('a', 'b');"> Login Empmark </button>
			</div>
			</div>
		</div>
		<script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
   </script>
<?php die(); ?>