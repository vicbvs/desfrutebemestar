function mudar(){
	let senha = document.getElementById('password')
	if(senha.type=='password'){
		senha.type = 'text'
	}else{
		senha.type = 'password'
		console.log(senha.type);			
	}
}

function editors(){
	tinymce.init({
		selector: 'textarea',
		language_url: './app/libs/pt_BR.js',
		language: 'pt_BR',
		paste_as_text: true,
		paste_block_drop: false,
		paste_merge_formats: true,
		paste_webkit_styles: 'all',
		menubar: '',
		plugins: ['advlist', 'code', 'autolink', 'lists', 'link', 'anchor', 'pagebreak'],
		toolbar: 'code undo redo | styles | bold italic forecolor backcolor | ' +
				'alignleft aligncenter alignright alignjustify | ' +
				'bullist numlist checklist outdent indent | removeformat link',
	});
}

document.onkeydown = function(e) {
  if(e.key === 'Escape') {
    document.getElementById('images').classList.remove('view');
		document.getElementById('modal').classList.remove('view');
  }
}

function removeImg(id,e){
	if (confirm("Deseja remover esta imagem?") == true) {
		fetch(sURL + `/app/api/delete.php`, { method: 'POST',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
			body: 'id='+id}).then(res => res.text()).then(res => {
			e.parentNode.remove()
			console.log(res);	
		}).catch(function (err) {
			console.log(err)
		})
	}
}

function crud(e){
	tinyMCE.triggerSave(); 
	let url = sURL+"/app/api/crud.php";
	let form = document.querySelector('form#editor');
	const data = new FormData(form)
	fetch(url,{method:'POST', body:data})
	.then(res=>res.text()).then(res=>{
		console.log(res);
		document.getElementById('returnmsg').innerHTML= 'Conteúdo adicionado ao site!';
		setTimeout(function() {
			document.getElementById('returnmsg').innerHTML= '';			
		}, 2000);
	}).catch(function(err){ console.log(err)})
}

function getDivChildren(containerId, elementsId) {
    var div = document.getElementById(containerId),
        subDiv = div.getElementsByTagName('div'),
        myArray = [];

    for(var i = 0; i < subDiv.length; i++) {
        var elem = subDiv[i];
        if(elem.id.indexOf(elementsId) === 0) {
            myArray.push(elem.id);
        }
    }
    return myArray;
}
function legend(){
	let legend = document.querySelectorAll('figure.legend');
	for(var i = 0; i < legend.length; i++) {
		var alt = legend[i].children[0].alt;
		var html = legend[i].innerHTML;
		legend[i].innerHTML = html+'<legend>'+alt+'</legend>';
	}
}
legend()

function addImg(i,e){
	document.querySelector('[name="2"]').value = i;
	let imgs = document.querySelectorAll('img.addImg');
	for(var i = 0; i < imgs.length; i++) {
 		imgs[i].classList.remove("addImg")		
	}
	e.classList.add('addImg');
}
function midia(a) {
	if(!ss['images'] || a==1){
		fetch(sURL + `/app/api/midia.php`, { method: 'POST',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
			body: 'url='+sURL}).then(res => res.text()).then(res => {
			let n = JSON.parse(res).reverse();
			console.log(res);	
			let h = ``;
			for(k in n){
				let x = n[k][0].split('.')
				if(n[k][1]==1){
					if(MOB!='iPhone' && MOB!='iPad'){
						x = x[0]+'.webp';					
					}else{
						x = n[k][0]					
					}
				}else{
					x = n[k][0]
				}
				let pasta = '/files/d/';
				if(x[1]=='gif'){
					pasta = '/files/x/';
				}
				h+=`<figure><img onclick="addImg('${n[k][1]+'/'+n[k][0]}',this)" src="${sURL+pasta+x}" alt="thumb" width="50" height="50">
				<a onclick="removeImg('${n[k][1]+'/'+n[k][0]}',this)"></a></figure>`
			}
			ss['images']=h;
			document.querySelector('#images').children[0].innerHTML = h;
		}).catch(function (err) {
			console.log(err)
		})
	}else{
		document.querySelector('#images').children[0].innerHTML = ss['images'];
	}
}
function modalImages(e){
	document.getElementById('images').classList.toggle('view');
	midia(1)
	if(e==1){
		
	}
}
function upload(){
	let url = sURL+"/app/api/upload.php";
	let form = document.querySelector('form#upload');
	const data = new FormData(form)
	fetch(url,{method:'POST', body:data})
	.then(res=>res.text()).then(res=>{
		console.log(res);
		ss.removeItem('images');
		midia()
		if(res==''){
			
		}
	}).catch(function(err){ console.log(err)})
}

function modalHide(){
	document.getElementById('images').classList.remove('view');
	document.getElementById('modal').classList.remove('view');	
}
function modalClose(){
	document.getElementById('images').classList.remove('view');
	document.getElementById('modal').classList.remove('view');
	document.location.reload(true);
}
function editar(h, t) {
	document.getElementById('modal').classList.add('view');

	let x = DT[1][h];
	let v = `<input name="0" type="hidden" value="${h}">`; 
	if(!x){ x=["","","",""] }
	if(t==1||t==9){ //text
		v += `<div class="margin">
			<span class="formIcon css"></span>
			<input value="${x[2]}" class="input" name="3" type="text" placeholder="CSS personalizado do texto!">
		</div>
		<div class="margin">
			<span class="formIcon pencil"></span>
			<input value="${x[0]}" class="input" name="1" type="text" placeholder="Texto do elemento!">
		</div>`;
	}else if(t==2||t==8){ //link
		console.log(x);
		v += `<div class="margin">
			<span class="formIcon css"></span>
			<input value="${x[2]}" class="input" name="3" type="text" placeholder="CSS personalizado do link!">
		</div>
		<div class="margin">
			<span class="formIcon  link"></span>
			<input value="${x[1]}" class="input" name="2" type="text" placeholder="URL do link">
		</div>
		<div class="margin">
			<span class="formIcon pencil"></span>
			<input value="${x[0]}" class="input" name="1" type="text" placeholder="Texto do link!">
		</div>`;
	}else if(t==3||t==7||t==10){ //img
		v += `<div class="inputs">
			<span class="formIcon css"></span>
			<input value="${x[2]}" class="input" name="3" type="text" placeholder="CSS personalizado da imagem!">
		</div>
		<div class="inputGroup">
			<div class="margin">
				<span class="formIcon image"></span>
				<input value="${x[1]}" class="input" name="2" type="text" placeholder="Url da Imagem ou selecione acima!" required>
			</div>
			<div class="margin">
				<span class="formIcon size"></span>
				<input value="${x[3]}" class="input" name="4" type="text" placeholder="Tamanho ex: a, b, c, d" required>
			</div>
		</div>
		<div class="margin">
			<span class="formIcon pencil"></span>
			<input value="${x[0]}" class="input" name="1" type="text" placeholder="Descrição da imagem!">
		</div>`;
		//$("#modal #dbu a.images").css({visibility: 'visible'})
	}else if(t==4){ //textarea
		v += `<div class="margin">
			<span class="formIcon css"></span>
			<input value="${x[2]}" class="input" name="3" type="text" placeholder="CSS personalizado do texto!">
		</div>
		<div class="margin">
			<textarea class="textarea" name="1" rows="5" placeholder="Texto do elemento!"></textarea>
		</div>`;
	}else if(t==5){ //editor
		v += `<div class="margin">
			<span class="formIcon css"></span>
			<input value="${x[2]}" class="input" name="3" type="text" placeholder="CSS personalizado do texto!">
		</div>
		<div class="margin">
			<textarea class="textarea" name="1" rows="5" placeholder="Texto do elemento!"></textarea>
		</div>`;
	}else if(t==6){ //iframe
		v += `<div class="margin">
			<span class="formIcon css"></span>
			<input value="${x[2]}" class="input" name="3" type="text" placeholder="CSS personalizado do texto!">
		</div>
		<div class="margin">
			<textarea class="textarea" name="1" rows="5" placeholder="Código do elemento!"></textarea>
		</div>`;
	}
	document.querySelector('.fields').innerHTML = v;
	
	if(t==6){
		document.querySelector('textarea').value = x[0]
	}else if(t==5){
		//console.log(x);
		document.querySelector('textarea').value = x[0]
  	editors();			
	}else if(t==4){
		document.querySelector('textarea').value = x[0]
	}
}

