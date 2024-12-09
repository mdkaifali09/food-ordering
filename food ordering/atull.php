<?php
$FirstName= $_POST["FirstName"];
$LastName= $_POST["LastName"];

$DOB= date('d-m-Y', strtotime($_POST['date']));
// $DOB= $_POST[date];

$Gender=$_POST['Gender'];

$Id=$_POST["Proof"];

$Image= $_FILES['UploadImage']['name'];
$ImageSize= $_FILES['UploadImage']['size'];
$ImageType= pathinfo($Image,PATHINFO_EXTENSION);
$TempNameImage= $_FILES['UploadImage']['tmp_name'];
$ActualPathImage= "./Image/".$Image;
move_uploaded_file($TempNameImage, $ActualPathImage);
if(isset($_FILES['UploadImage']))
{
    if($ImageSize>=102400)
    {
        echo "Size of Image is Greater than 100 KB.<br>";
    }

    if($ImageType!="jpg" && $ImageType!="jpeg" && $ImageType!="png")
    {
        echo "Image should be of Type png, jpg or jpeg.<br>";
    }
}

$Proof= $_FILES['UploadProof']['name'];
$ProofSize=$_FILES['UploadProof']['size'];
$ProofType= pathinfo($Proof,PATHINFO_EXTENSION);
$TempNameProof= $_FILES['UploadProof']['tmp_name'];
$ActualPathProof= "./Proof/".$Proof;
move_uploaded_file($TempNameProof,$ActualPathProof);


if(isset($_FILES['UploadProof']))
{
    if($ProofSize>=307200)
    {
        echo "Size of document is Greater than 300 KB.<br>";
    }

    if($ProofType!="docx" && $ProofType!="doc" )
    {
        echo "Document should be of Type doc or docx.<br>";
    }
   
}
?>
<img src="Image/download.jpeg" alt="Image">   <br> 

<?php
echo "Name is:- ".$FirstName."&nbsp".$LastName."<br>";
echo "D.O.B:- ".$DOB."<br>";
echo "Gender:- ".$Gender."<br>";
echo "ID Proof Selected:- ".$Id."<br>";
echo "Document:- ";

// echo $Gender."<br>";
// echo $Id."<br>";


// echo $Image."<br>";
// echo $ImageSize."<br>";
// echo $ImageType."<br>";

// echo $Proof."<br>";
// echo $ProofSize."<br>";
// echo $ProofType."<br>";
?>
<f src="Proof/KCL,KVL.docx" alt=" ID Proof ">    

<!-- <a href="$ActualPathProof" Download alt=Error>Download</a> -->
<a href='./Proof/Ankur Dsa Outputs.docx' Download alt=Error>open document</a>