<?
if (!class_exists('gtk')) {
    die("Please load the php-gtk2 module in your php.ini\r\n");
}
 
//Create the login window
$wnd = new GtkWindow();
$wnd->set_title('7-PDF Converter');
//Close the main loop when the window is destroyed
$wnd->connect_simple('destroy', array('gtk', 'main_quit'));
 
//Set up all the widgets we need
$lblCredit   = new GtkLabel('Please provide your data');
//The second parameter says that the underscore should be parsed as underline
$lblInFile = new GtkLabel('Anrede', true);
$lblOutFile = new GtkLabel('Vorname', true);
$lblOutFile = new GtkLabel('Nachname', true);
$lblUsername = new GtkLabel('_Username', true);
$lblPassword = new GtkLabel('_Password', true);
$txtUsername = new GtkEntry();
$txtPassword = new GtkEntry();
$btnStart    = new GtkButton('User anlegen');
 
//Which widget should be activated when the
// mnemonic (Alt+U or Alt+P) is pressed?
$lblUsername->set_mnemonic_widget($txtUsername);
$lblPassword->set_mnemonic_widget($txtPassword);
$lblInFile->set_mnemonic_widget($txtInFile);
$lblOutFile->set_mnemonic_widget($txtOutFile);
//Hide the password
//$txtPassword->set_invisible_char('*');
 
//Call the login function when the user clicks on Login
$btnStart->connect_simple('clicked', 'convertToPdf', $wnd, $txtUsername, $txtPassword);
 
//Lay out all the widgets in the table
$tbl = new GtkTable(5, 2);
$tbl->attach($lblCredit, 0, 2, 0, 1);
$tbl->attach($lblUsername, 0, 1, 1, 2);
$tbl->attach($txtUsername, 1, 2, 1, 2);
$tbl->attach($lblPassword, 0, 1, 2, 3);
$tbl->attach($txtPassword, 1, 2, 2, 3);
$tbl->attach($lblInFile, 0, 1, 3, 4);
$tbl->attach($txtInFile, 1, 2, 3, 4);
$tbl->attach($lblOutFile, 0, 1, 4, 5);
$tbl->attach($txtOutFile, 1, 2, 4, 5);
 
//Add the buttons to a button box
$bbox = new GtkHButtonBox();
$bbox->set_layout(Gtk::BUTTONBOX_EDGE);
$bbox->add($btnStart);
 
//Add the table and the button box to a vbox
$vbox = new GtkVBox();
$vbox->pack_start($tbl);
$vbox->pack_start($bbox);
 
//Add the vbox to the window
$wnd->add($vbox);
//Show all widgets
$wnd->show_all();
//Start the main loop
Gtk::main();
 
function convertToPdf(GtkWindow $wnd, GtkEntry $txtUsername, GtkEntry $txtPassword, GtkEntry $txtInFile, GtkEntry $txtOutFile)
{
    //fetch the values from the widgets into variables
    $strUsername = $txtUsername->get_text();
    $strPassword = $txtPassword->get_text();
    $strinFile = $txtInFile->get_text();
    $strOutFile = $txtOutFile->get_text();
 
    try {
        $path = realpath(dirname(__FILE__) . '/classes');
        set_include_path($path . PATH_SEPARATOR . get_include_path());
 
        // create a new object, provide options by array in constructor
        require_once 'SevenPdf/Client.php';
        $sevenPdfClient = new SevenPdf_Client(
            array(
                'username' => $strUsername,
                'password' => $strPassword
            )
        );
        $sevenPdfClient->convertToPdf($strinFile, $strOutFile);
        $dialog = new GtkMessageDialog($wnd, Gtk::DIALOG_MODAL,
                Gtk::MESSAGE_INFO, Gtk::BUTTONS_OK, 'convert complete');
        $dialog->set_markup('convert complete');
        $dialog->run();
        $dialog->destroy();
    } catch (Exception $e) {
        $dialog = new GtkMessageDialog($wnd, Gtk::DIALOG_MODAL,
                Gtk::MESSAGE_ERROR, Gtk::BUTTONS_OK, $e->getMessage());
        $dialog->set_markup($e->getMessage());
        $dialog->run();
        $dialog->destroy();
    }
} ?>