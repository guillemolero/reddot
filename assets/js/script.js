window.onload = function(){
	
	var botones = document.getElementsByTagName("button");
	var textAreas = document.getElementsByTagName("textarea");
	var inputs = document.getElementsByClassName("boton");
	var recursos = document.getElementsByClassName("recursos");
	
	var oro = recursos[0];
	var plata = recursos[1];
	var bronce = recursos[2];
	
	//Coste para subir de nivel
	var coste_oro = 10;
	
	//Bonus = incremento de ganancias por segundo
	var bonus_oro = 0;
	var bonus_plata = 0;
	var bonus_bronce = 0;
	
	//Valores iniciales
	var nivel_oro = 0;
	
	
	
	console.log(oro, plata, bronce);
	console.log(botones);
	
	
	//Tiempo
	setInterval(IncrementarRecursos, 2000);
	
	function IncrementarRecursos(){
		x = parseInt(oro.value);
		y = parseInt(plata.value);
		z = parseInt(bronce.value);
		x = x + bonus_oro;
		y = y + bonus_plata;
		z = z + bonus_bronce;
		oro.value = x;
		plata.value = y;
		bronce.value = z;
	}
	
	
	
	//Pruebas de acciones
	
	//Boton 2
	botones[2].onclick = function(){
		
	};
	
	//Boton 3
	botones[3].onclick = function(){
		
	};
	
	//Boton 4
	function boton4(){
		//¿Oro actual -mayor o igual que- precio de la posicion?
		if(oro.value >= coste_oro){
			//Coge el nivel actual y lo convierte a entero
			//x = parseInt(inputs[4].value);
			//console.log(x);
			//Funcion de aumento
			nivel_oro = nivel_oro + 1;
			//Aumenta la subida de oro
			bonus_oro = bonus_oro + 1;
			//Establece el nuevo valor
			inputs[4].setAttribute("value", "Nivel: " + nivel_oro + ". Tu produccion de Oro es de " + bonus_oro/2 + " por segundo.");
			//Cobra el coste
			oro.value = oro.value - coste_oro;
			//Asigna el nuevo nivel de coste
			coste_oro = coste_oro * 2;
			
			//Cambiar el nombre del boton (Provisional)
			botones[4].innerHTML = "Fabrica de Oro - Siguiente nivel: " + coste_oro + " de oro.";
		}
	};
	
	//Mostrar ocultar botones
	for(i=0; i<botones.length; i++){
		botones[i].onclick = function(){
			var i = this.getAttribute("id") - 1;
			switch(i){
				case 0: boton0();
					break;
				case 1: boton1();
					break;
				case 2: boton2();
					break;
				case 3: boton3();
					break;
				case 4: boton4();
					break;
				default: console.log("default");
					break;
			}
			if(inputs[i].getAttribute("type") == "hidden"){
				console.log("Boton " + (i+1) + " pulsado");
				inputs[i].setAttribute("type", "show");
			}
			/* Para que no se cierren
			else{
				console.log("Boton " + (i+1) + " pulsado");
				inputs[i].setAttribute("type", "hidden");
			}
			*/
		}
	}
	
}