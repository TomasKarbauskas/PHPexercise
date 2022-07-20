

<!--//Failų valdymo panelė.-->
<!--//1. Atvaizduokite formą, kuri leistų upload'inti .png ir .jpeg failus į serverį. Failų dydžio limitas - 1MB.-->
<!--//Uploadintas failas turi atsirasti ./data direktorijoje su unikaliu pavadinimu.-->
<!--//Failo metaduomenys (failo pavadinimas, dydis, path'as, įkėlimo data) turėtų būti išsaugomi atskirame faile.-->

<!--2. Pridėti puslapį, kuriame būtų atvaizduojami visi pauplodinti failai. Turėtų būti matoma:-->
<!--- failo pavadinimas (kokį buvo priskyręs vartotojas)-->
<!--- failo dydis-->
<!--- įkėlimo data-->




<body>
<form
action="submit.php"
method="post"
enctype="multipart/form-data">
    <input type="file" name="input_name">
    <button type="submit">Upload</button>
</form>
</body>


