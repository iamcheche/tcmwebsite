
	<div id="openGrades" class="modalDialog">
        <div>
            <a href="<?php echo base_url() ?>" title="Close" class="close">X</a>
			<div class = "table-responsive">
				<div class = "col-md-12">
					<table class = "table" style="width:100%; text-align:center; display: inline-block;">
						<thead style="background-color:#222; color:#fff;">
		            		<b>PRELIM</b>
		            		<tr>
		            			<th style="text-align:center;">Component Name</th>
		            			<th style="text-align:center;">Raw Score</th>
		      					<th style="text-align:center;">Total Score</th>
		            			<th style="text-align:center;">Percentage</th>
		            		</tr>
		            	</thead>	            	
		            	
		            	<tbody class = "table-striped" style="background-color:#e5e5ff; width: 100%"> 
		            		<?php 
		            			$total = 0;
		            			$total_sw = 0; 
		            			$count = 0;
		            			$count_sw = 0;
		            				
		            		?>
		            		<tr>
		                   		<td></td>
		            			<td colspan="3" style="text-align:left;"><b>Assignments</b></td>	
		            		</tr>
		            		<?php if(isset($assignments)) : foreach ($records as $row) : ?>
		                    		<th><?php echo $row->name ?> </th>
		                    		<th><?php echo $row->raw_score ?></th>
		                    		<th><?php echo $row->total_items ?></th>
		                    		<th><?php echo $row->percent ?></th>
		                    		<?php 
		                    			$count++;
		                    			$total += $row->percent; 
		                    			$hw_percent = $total/$count; 
		                    		?>
		                    	</tr>
		                    	
		                    <?php endforeach; ?>
		                    <tr>
		                    	<td colspan="3"><b>Total Assignment Percentage</b></td>
		                    	<td><?php echo $hw_percent ?></td>
		                   	</tr>

		                   	<tr>
		                   		<td></td>
		            			<td colspan="3" style="text-align:left;"><b>Seatworks</b></td>	
		            		</tr>
		                   	<?php foreach ($seatworks as $row) : ?>
		                    		<th><?php echo $row->name ?> </th>
		                    		<th><?php echo $row->raw_score ?></th>
		                    		<th><?php echo $row->total_items ?></th>
		                    		<th><?php echo $row->percent ?></th>
		                    		<?php 
		                    			$count_sw++;
		                    			$total_sw += $row->percent; 
		                    			$sw_percent = $total_sw/$count_sw; 
		                    		?>
		                    	</tr>
		                    	
		                    <?php endforeach; ?>
		                    <tr>
		                    	<td colspan="3"><b>Total Seatwork Percentage</b></td>
		                    	<td><?php echo $sw_percent ?></td>
		                   	</tr>

		            		<?php else : ?>     
			            	<h2>No records were returned.</h2>
			            	<?php endif; ?>                                     
			            	<hr >
		            		</tbody>
					</table>
				</div>
				
			</div> 
		</div>
	</div>
