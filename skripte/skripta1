// ==UserScript==
// @name           Agar.io BOT
// @namespace      none
// @include        http://agar.io/
// @run-at         document-start
// @grant none
// @description    Userscript BOT AI for Agar.io
// @version 0.0.1.20150603132445
// ==/UserScript==
// 

changed = 0; // script need to be edited with

window.addEventListener('beforescriptexecute', function (e) {

	//for external script:
	src = e.target.src;
	if (src.search(/main_out\.js..../) != -1) {
		console.log('event listener fired, main_out found');
		changed++;
		e.preventDefault();
		e.stopPropagation();
		append();
		//init();
	};

	//when done, remove the listener:
	if (changed == 1)
		window.removeEventListener(e.type, arguments.callee, true);
}, true);

var newscript = document.createElement('script'); 
//newscript.src = 'http://a.pomf.se/dttxnu.js';
//newscript.src = 'http://a.pomf.se/vbepzt.js';
//newscript.src = 'http://a.pomf.se/lfwcce.js';

//newscript.src = 'http://a.pomf.se/eusmqe.js';
newscript.src = 'D://zacasno/agarIoBot2.js';
newscript.type = 'text/javascript'; 
document.getElementsByTagName('head')[0].appendChild(newscript);


function append() {
	console.log('append fired');
	document.head.appendChild(newscript);
	//.innerHTML = s.toString().replace(/^function.*{|}$/g, '');
}

var injection = function()
{		
	Nextupdate = 0;
	 botX = 0;
	 botY = 0;
	 bestscore = 0;
	 lastscore = 0;
	 mindist = 1920;

	 //DNA = [];

	 REALDNA = [0.5013380198770861,1.7849210794316377,0.8020250856619379,0.09048378064494285];
	 REALSCORE = 25;

	 TESTDNA = REALDNA.slice();
	 TESTSCORE = 25;

	 testingdna = 1;
	 DNA = REALDNA.slice();

	 learnrate = 0.3;
	precision = 1000;
 
	setTimeout(function(){
		changed++;

		INJECTED = function(){
			var ticker = La;
			if (ticker>=Nextupdate || !Nextupdate)
			{
				//var div = 1/q.length;
				
				botX0 = 0;
				botY0 = 0;
				
				botX = 0;
				botY = 0;

				foodX0 = 0;
				foodY0 = 0;
				foodC = 1;
				
				dangerX0 = 0;
				dangerY0 = 0;
				dangerC = 1;

				priX0 = 0;
				priY0 = 0;

				locationX = s;
				locationY = t;

				originX = ~~((Y + $) / 2);
				originY = ~~((Z + aa) / 2);

				table2 = n;
				table0 = l;
				shortest = -1;

				
				scale = h;
				
				speed0 = Math.max(q, r)/2/scale;
				speed = speed0/3;
				

				
				if ( table0[0] && C!=null)
				{
					var ownsize = table0[0].size;
					
					centerX0 = (originX-locationX);
					centerY0 = (originY-locationY);
					centerdistance = Math.sqrt( Math.pow(centerX0,2) + Math.pow(centerY0,2) );
					
					if (centerdistance==0)
					{
						centerdistance = -1;
					}
				
					centerdistance0 = (originX+originY)/2;
					
					centerscale = Math.max(0,speed0+centerdistance+ownsize-centerdistance0)/(speed0);
					
					centerX0 = centerX0/centerdistance*centerscale;
					centerY0 = centerY0/centerdistance*centerscale;
					
					

					//centerX = centerX*(centerX*centerX);
					//centerY = centerY*(centerY*centerY);

					for (var key in table2)
					{
						var targetX = table2[key].x;
						var targetY = table2[key].y;

						var size = table2[key].size;

						var distance = Math.sqrt( Math.pow((targetX-locationX),2) + Math.pow((targetY-locationY),2) );
						if (distance==0)
						{
							distance = -1;
						}

						var vecX = (targetX-locationX)/distance;
						var vecY = (targetY-locationY)/distance;

						var distance = Math.max(1,distance);

						if (table2[key] && table2[key].id!=table0[0].id && !(table2[key].isVirus && ownsize<size) )
						{
							if (table0[0].name==table2[key].name)
							{
								//botX += vecX*distance;
								//botY += vecY*distance;
							}
							else
							{
								if (size>(ownsize) || (table2[key].isVirus && size<=ownsize))
								{
									var dangerscale = Math.max(0,speed0-distance+size+ownsize)/(speed0);
									dangerX0 += -vecX*dangerscale*dangerscale;
									dangerY0 += -vecY*dangerscale*dangerscale;
									//dangerC += size;
								}
								else
								{		
									if (size<(ownsize-9))
									{
										var foodscale = Math.max(0,speed0-distance+size+ownsize)/(speed0);
										foodX0 += vecX*size*foodscale*foodscale;
										foodY0 += vecY*size*foodscale*foodscale;
										foodC++;
										//foodC += size/distance;
									}
								}
								if (table0[0].name==table2[key].name || (shortest<0 || (distance)<shortest) && size<(ownsize-9) && !table2[key].isVirus )
								{
									shortest = (distance);
									var priorityscale = Math.max(0,speed0-distance+size+ownsize)/(speed0);
									
									priX0 = vecX*distance*priorityscale;
									priY0 = vecY*distance*priorityscale;
								}
							}
						}	
					}

					foodX0 = foodX0/foodC*speed;
					foodY0 = foodY0/foodC*speed;
					
					dangerX0 = dangerX0/dangerC*speed;
					dangerY0 = dangerY0/dangerC*speed;
					
					priX0 = priX0;
					priY0 = priY0;
					
					centerX0 = centerX0*speed;
					centerY0 = centerY0*speed;

					normalizer1 = Math.sqrt( Math.pow(foodX0,2) + Math.pow(foodY0,2) );
					normalizer2 = Math.sqrt( Math.pow(dangerX0,2) + Math.pow(dangerY0,2) );
					normalizer3 = Math.sqrt( Math.pow(priX0,2) + Math.pow(priY0,2) );
					normalizer4 = Math.sqrt( Math.pow(centerX0,2) + Math.pow(centerY0,2) );
					
					if (normalizer1 == 0)
					{
						normalizer1 = 1;
					}
					if (normalizer2 == 0)
					{
						normalizer2 = 1;
					}
					if (normalizer3 == 0)
					{
						normalizer3 = 1;
					}
					if (normalizer4 == 0)
					{
						normalizer4 = 1;
					}
					
					if (normalizer1>0)
					{
						//foodX = foodX0/normalizer1*speed*DNA[0];
						//foodY = foodY0/normalizer1*speed*DNA[0];
						foodX = foodX0*DNA[0];
						foodY = foodY0*DNA[0];
						botX0 += foodX;
						botY0 += foodY;
						
						e.beginPath();
						e.moveTo(q/2,r/2);
						e.lineTo(q/2+foodX,r/2+foodY);
						e.closePath();
						e.strokeStyle = '#ffff00';
						e.stroke(); 
					}
					if (normalizer2>0)
					{
						//dangerX = dangerX0/normalizer2*speed*DNA[1];
						//dangerY = dangerY0/normalizer2*speed*DNA[1];
						dangerX = dangerX0*DNA[1];
						dangerY = dangerY0*DNA[1];
						botX0 += dangerX;
						botY0 += dangerY;
						
						e.beginPath();
						e.moveTo(q/2,r/2);
						e.lineTo(q/2+dangerX,r/2+dangerY);
						e.closePath();
						e.strokeStyle = '#ff0000';
						e.stroke(); 
					}
					
					if (normalizer3>0)
					{
						priX = priX0*DNA[2];
						priY = priY0*DNA[2];
						botX0 += priX;
						botY0 += priY;
						
						e.beginPath();
						e.moveTo(q/2,r/2);
						e.lineTo(q/2+priX,r/2+priY);
						e.closePath();
						e.strokeStyle = '#00ff00';
						e.stroke(); 
					}
					if (normalizer4>0)
					{
						centerX = centerX0*DNA[3];
						centerY = centerY0*DNA[3];
						botX0 += centerX;
						botY0 += centerY;
						
						e.beginPath();
						e.moveTo(q/2,r/2);
						e.lineTo(q/2+centerX,r/2+centerY);
						e.closePath();
						e.strokeStyle = '#0000ff';
						e.stroke(); 
					}

					dirX = 0;
					dirY = 0;

					if (botX0<0)
					{
						dirX = -1;
					}
					else
					{
						dirX = 1;
					}
					if (botY0<0)
					{
						dirY = -1;
					}
					else
					{
						dirY = 1;
					}

					if ((locationX+ownsize*2*dirX)>=centerX0*2 || (locationX+ownsize*2*dirX)<1)
					{
						botX = 0;
					}
					else
					{
						botX = botX0;
					}
					if ((locationY+ownsize*2*dirY)>=centerY0*2 || (locationY+ownsize*2*dirY)<1)
					{
						botY = 0;
					}
					else
					{
						botY = botY0;
					}

					//var specialnormalizer1 = Math.sqrt( Math.pow(botX0,2) + Math.pow(botY0,2) );
					//var specialnormalizer2 = Math.sqrt( Math.pow(botX,2) + Math.pow(botY,2) );
					//botX = botX*specialnormalizer1/specialnormalizer2;
					//botY = botY*specialnormalizer1/specialnormalizer2;
					
					botX = botX0;
					botY = botY0;

					e.beginPath();
					e.moveTo(q/2,r/2);
					e.lineTo(q/2+botX,r/2+botY);
					e.closePath();
					e.strokeStyle = '#000000';
					e.stroke(); 	

				}
				if (C==null){
					window.setNick("BOT"); 
					console.log("Died - Score: " + lastscore + " Best score: " + bestscore);

					if (testingdna>0)
					{
						TESTSCORE = lastscore;

					}
					else
					{
						REALSCORE = (REALSCORE+lastscore)/2;
					}
					lastscore = 0;

					for (var key in DNA)
					{		
						if (TESTSCORE > REALSCORE)
						{
							var mul = TESTSCORE/REALSCORE
							REALDNA[key] = (REALDNA[key] + TESTDNA[key]*mul)/(1+mul);
							REALDNA[key] = Math.round(REALDNA[key]*precision)/precision;
						}

						if (testingdna<0)
						{
							TESTDNA[key] = REALDNA[key] + REALDNA[key]*(Math.random() - Math.random())*learnrate;
							TESTDNA[key] = Math.round(TESTDNA[key]*precision)/precision;
						}
					}

					testingdna = -testingdna;

					if (testingdna>0)
					{
						DNA = TESTDNA.slice();
					}
					else
					{
						DNA = REALDNA.slice();
					}
					console.log("DNA = [" + DNA + "];");
				}
				else
				{
					bestscore = Math.max(bestscore, Ma()/100);
					lastscore = Math.max(lastscore, Ma()/100);
				}
				Nextupdate = ticker;
			}
			ratio = 0.5;

			Q=(q/2+botX)*ratio+Q*(1-ratio); 
			R=(r/2+botY)*ratio+R*(1-ratio); 
			ga();
		};
		if (document.getElementById("canvas"))
		{
			document.getElementById("canvas").onmousemove = function(){};
		}
		console.log("injection done");
	},3000);
}


var injectscript = document.createElement("script");
injectscript.textContent = "(" + injection.toString() + ")();";
document.getElementsByTagName('head')[0].appendChild(injectscript);
