<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Widget_Facebook_like_box extends Widgets
{
    // The widget title,  this is displayed in the admin interface
    public $title = 'Facebook Like Box';

    //The widget description, this is also displayed in the admin interface.  Keep it brief.
    public $description =  'Displays the likes for a specific facebook page.';

    // The author's name
    public $author = 'Jonathan Sundquist';

    // The authors website for the widget
    public $website = 'http://www.digital-portfolio.net/';

    //current version of your widget
    public $version = '1.0';

    /**
     * $fields array fore storing widget options in the database.
     * values submited through the widget instance form are serialized and
     * stored in the database.
     */
    public $fields = array(
        array(
            'field'   => 'url',
            'label'   => 'Facebook Page URL',
            'rules'   => 'required'
        ),
        array(
            'field'   => 'width',
            'label'   => 'Width',
            'rules'   => 'numeric'
        ),
        array(
            'field'   => 'height',
            'label'   => 'Height',
            'rules'   => 'numeric'
        ),
        array(
            'field'   => 'show_faces',
            'label'   => 'Show Faces'
        ),
        array(
            'field'   => 'color_scheme',
            'label'   => 'Color Scheme'
        ),
        array(
            'field'   => 'stream',
            'label'   => 'Stream'
        ),
        array(
            'field'   => 'show_border',
            'label'   => 'Show Border'
        ),
        array(
            'field'   => 'header',
            'label'   => 'Header'
        )
    );

    /**
     * the $options param is passed by the core Widget class.  If you have
     * stored options in the database,  you must pass the paramater to access
     * them.
     */
    public function run($options)
    {
        return $options;
    }
}