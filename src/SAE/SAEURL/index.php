<?
$kv = new SaeKV(); 
if(isset($_GET['l']))
{
    $kv -> init(); 
    $x = $kv -> get('a') + 1; 
    $kv -> set('s_'.$x, $_GET['l']); 
    $kv -> set('a', $x); 
    echo 'URL:http://'.$_SERVER[HTTP_HOST].'/?s='.$x; 
}
if(isset($_GET['s']))
{
    $kv -> init(); 
    header('Location:'.$kv -> get('s_'.$_GET['s'])); 
}
?>
<form> <input type = 'text' name = "l"> <input type = "submit"> </form>