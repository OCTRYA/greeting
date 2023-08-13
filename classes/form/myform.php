// moodleform is defined in formslib.php
namespace local_greetings\form;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir .'/formslib.php');

class myform extends \moodleform {
    // Add elements to form.
    public function definition() {

        // A reference to the form is stored in $this->form.
        // A common convention is to store it in a variable, such as `$mform`.
        $mform = $this->_form; // Don't forget the underscore!
        // Add elements to your form.
        $mform->addElement('text', 'email', get_string('email'));
        // Set type of element.
        $mform->setType('email', PARAM_NOTAGS);
        // Default value.
        $mform->setDefault('email', 'Please enter email');
        $mform->addElement('textarea', 'message', get_string('yourmessage', 'local_greetings')); // Add elements to your form.
        $mform->setType('message', PARAM_TEXT); // Set type of element.
        $submitlabel = get_string('submit');
        $mform->addElement('submit', 'submitmessage', $submitlabel);
    }
    // Custom validation should be added here.
    function validation($data, $files) {
        return [];
    }
}

