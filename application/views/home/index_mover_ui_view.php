<!-- main page -->
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
		<meta name="keywords"    content="Bootstrap Tutorial"/>
		<meta name="description" content="Custom template making with bootstrap framework."/>	  
		<meta name="author"      content="Samer Sarker Khokon. 01719347580"/>	  
	  
		<?php $this->load->view('utility');?>
		
		
	  <title>IP: <?php echo $_SERVER['REMOTE_ADDR'];?></title>
	</head>
<body>   
	
	
	
	
	
	
	<div class="container"> 
	    <!---header start----->	
		<div class="row">
			<?php $this->load->view("home/capm_header");?>
		</div>	
	
		<div class="row">
			<div class="col-md-12  placeholder">  </div>
		</div>

		<div class="row">
			<?php $this->load->view("home/capm_megamenu");?>
		</div> 
		<!---header end----> 
	
		
	    <div class="row">
			<!--static sidebar menu---->
			<div class="col-md-3">
				<?php $this->load->view("home/company_fundamental_quantitative_left_menu");?>
			</div>
			<!--static sidebar menu end--->
		
		
			
			<div class="col-md-9">
			
				<div class="row">
					<div class="col-md-12 placeholder">
						<?php $this->load->view("home/company_fundamental_quantitative_submenu_overview");?>
					</div>
				</div>
			
			    <table width="100%">
					<tr>
						<td>	
							<div id="index_mover_in_table_div"></div>
						</td>
					</tr>				
				</table>				
			</div>
	    </div>
		
	</div>
				
	
	
	<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>		
	<script type="text/javascript">
	$(document).ready(function(){
        //alert(12);
        function index_movers_data_in_table()
		{		
			$.ajax({
				type:"post",
				url:"<?php echo site_url();?>/index_mover_ui/get_index_mover_datatable",
				data:'1=1',
				cache:false ,
				async:true,
				dataType:'html' ,
				success:function(st){
				   //alert(st);
				   //$("#index_mover_in_table_div").empty();
				   $("#index_mover_in_table_div").html(st).fadeIn('slow');
				}
			});
		}

		index_movers_data_in_table();		
	
	    $(this).bind("contextmenu", function(e) {
            e.preventDefault();
        });
		
	});
	</script>	
</body>
</html>