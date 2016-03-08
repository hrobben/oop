<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Use of classes in PHP</title>
    <link rel="stylesheet" type="text/css" href="common.css"/>
</head>
<body>


<form id="frm" action="percentage.php">
    <p>Bedrag : <input type="text" name="bedrag" ></p>
    <p>Percentage: <input type="text" name="percent" ></p>
    <input type="button" onclick="myFunction()" value="Submit">
</form>

<?php

class percentage {
    public $bedrag = 100;
    public $percentage = 21;
    private $_uitkomst = 21;

    public function procent() {
        if ( $this->bedrag ) {
            $this->_uitkomst = $this->bedrag * ($this->percentage/100);
            return true;
        }
        return false;
    }

    public function getUitkomst() {
        return $this->_uitkomst;
    }
}

if ($_GET) {
    $myPercentage = new percentage();
    $myPercentage->bedrag = $_GET['bedrag'];
    $myPercentage->percentage = $_GET['percent'];
    if ($myPercentage->procent()) {
        $myPercentage->text1 = '<h2>' . $myPercentage->percentage . ' % van ' . $myPercentage->bedrag;
        $myPercentage->text2 = ' = ' . $myPercentage->getUitkomst() . '</h2>';

        echo '<h1>' . $myPercentage->percentage . ' van het bedrag ' . $myPercentage->bedrag . ' berekenen!!!!!!!!!!!!!!!</h1>';

        if ($myPercentage->getUitkomst()) {
            echo $myPercentage->text1 . ' ' . $myPercentage->text2;
        }
    }
    var_dump($myPercentage);
}
?>

<script>
    function myFunction() {
        document.getElementById("frm").submit();
    }
</script>


</body>

</html>