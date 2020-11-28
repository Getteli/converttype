// navbar menu mobil
const ElemensDropdownMenuMobile = document.querySelectorAll(".sidenav");
const InstanceDropdownMenuMobile = M.Sidenav.init(ElemensDropdownMenuMobile,{
    edge: "right",
    draggable: true,
});
var $input    = document.getElementById('input-file2'),
    $fileName = document.getElementById('file-name2');
$input.addEventListener('change', function(){
  var namefile = this.value.split("\\")[2];
  $fileName.textContent = namefile;
});
