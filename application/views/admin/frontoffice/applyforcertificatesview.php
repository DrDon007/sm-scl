<table class="table table-striped">     
    <tr>
        <th class="border0"><?php echo $this->lang->line('name'); ?></th>
        <td class="border0"><?php print_r($Call_data['name']); ?></td>
        <th class="border0"><?php echo $this->lang->line('phone'); ?></th>
        <td class="border0"> <?php print_r($Call_data['contact']); ?></td>
    </tr>
    <tr>
        <th><?php echo $this->lang->line('date'); ?></th>
        <td><?php echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($Call_data['date'])); ?></td>
        <th><?php echo $this->lang->line('next_follow_up_date'); ?></th>
        <td><?php print_r(date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($Call_data['follow_up_date']))); ?></td>
    </tr>
    <tr>
 
        <th><?php echo $this->lang->line('certificate_type'); ?></th>
        <td><?php print_r($Call_data['certificate_type']); ?></td>
        <th><?php echo $this->lang->line('status'); ?></th>
        <td><?php print_r($Call_data['status']); ?></td>
    </tr>       
    <tr>
        <th><?php echo $this->lang->line('description'); ?></th>
        <td><?php print_r($Call_data['description']); ?></td>
        <th><?php echo $this->lang->line('note'); ?></th>
        <td><?php print_r($Call_data['note']); ?></td>
    </tr>
    <tr>
        <th><?php echo $this->lang->line('approved_by'); ?></th>
        <td><?php print_r($Call_data['approved_by']); ?></td>
    </tr>    
</table>