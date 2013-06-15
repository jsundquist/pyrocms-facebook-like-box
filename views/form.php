<ol>
    <li class="even">
        <label>Facebook Page URL</label>
        <?php echo form_input('url', $options['url']); ?>
    </li>
    <li class="odd">
        <label>Width</label>
        <?php echo form_input('width', ($options['width'] != '' ? $options['width'] : '292')); ?>
    </li>
    <li class="even">
        <label>Height</label>
        <?php echo form_input('height', ($options['height'] != '' ? $options['height'] : '')); ?>
    </li>
    <li class="odd">
        <label>Show Faces</label>
        <?php echo form_checkbox('show_faces', '1', ($options['show_faces'] == '1' ? TRUE : FALSE)); ?>
    </li>
    <li class="even">
        <label>Color Scheme</label>
        <?php echo form_dropdown('color_scheme', array('light'=>'Light', 'dark'=>'Dark'), $options['color_scheme']); ?>
    </li>
    <li class="odd">
        <label>Stream</label>
        <?php echo form_checkbox('stream', '1', ($options['stream'] == '1' ? TRUE : FALSE)); ?>
    </li>
    <li class="even">
        <label>Show Border</label>
        <?php echo form_checkbox('show_border', '1', ($options['show_border'] == '1' ? TRUE : FALSE)); ?>
    </li>
    <li class="odd">
        <label>Header</label>
        <?php echo form_checkbox('header', '1', ($options['header'] == '1' ? TRUE : FALSE)); ?>
    </li>
</ol>
