<div class="main-content">

    <div class="page-content">

<div class="main-content">

    <div class="page-content">

    	<div class="page-header">
			<h1>
				List of Marital
			</h1>
		</div>

        
    	<div class="widget-box">
    		<div class="widget-header header-color-blue">
	            <h5 class="bigger lighter">
	                <i class="icon-table"></i>
	                List of Current Marital
	            </h5>
	        </div>
    		<div class="widget-body">
	            <div class="widget-main ">
	                <div class="row">
	                    <div class="col-xs-12">
	                    	<table id="table_senarai" class="table table-striped table-bordered table-hover">

								<thead>
									<tr>
							    		<th style="max-width: 50px;">Bil.</th>
									    <th style="max-width: 100px;">marital</th>
									</tr>
								</thead>

								<tbody>
									@if($senarai)
                                        <?php $count =1; ?>
                                        @foreach($senarai as $sen)
                                            <tr>
												<td style="max-width: 50px; white-space: initial;">
													<?php echo $count ; ?>
												</td>
												<td style="max-width: 100px; white-space: initial;">
													<?php echo $sen->marital; ?>
												</td>
											</tr>
                                            <?php $count += 1; ?>
                                        @endforeach
                                    @endif
							  	</tbody>
							</table>
	                    </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>

	$(document).ready( function () {

	    $('#table_senarai').DataTable({
        });

	});
</script>
asdasd.txt
3 KB