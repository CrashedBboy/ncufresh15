// Handle keyboard controls
var keysDown = {};

addEventListener("keydown", function (e) {
	keysDown[e.keyCode] = true;
}, false);

addEventListener("keyup", function (e) {
	delete keysDown[e.keyCode];
}, false);


// Update game objects
var update = function (modifier) {

	//var distance = hero.speed * modifier ;
	var distance = 4 ;

	if (38 in keysDown) { // Player holding up
		if(hero.y-distance>=0 ){ // edge
			hero.y -= distance;
			map.top -= distance;
		}

		// walls
		// for (i=0;i<blocks.length ;i++ )
		// {
		// 	if (isTouching(hero,blocks[i]))
		// 	{
		// 		hero.y = blocks[i].y + blocks[i].height +1;
		// 	}
		// }
	
	}
	if (40 in keysDown) { // Player holding down

		if(hero.y+distance<=bgImage.height-32){ // edge
			hero.y += distance;
			map.top += distance;
		}


		// walls
		// for (i=0;i<blocks.length ;i++ )
		// {
		// 	if (isTouching(hero,blocks[i]))
		// 	{
		// 		hero.y = blocks[i].y - hero.height -1;
		// 	}
		// }


	}
	if (37 in keysDown) { // Player holding left
		if(hero.x-distance >= 0 ){ // edge
			hero.x -= distance;
			map.left -= distance;
		}

		// walls
		// for (i=0;i<blocks.length ;i++ )
		// {
		// 	if (isTouching(hero,blocks[i]))
		// 	{
		// 		hero.x = blocks[i].x + blocks[i].width +1;
		// 	}
		// }

	}
	if (39 in keysDown) { // Player holding right
		
		if(hero.x+distance <= bgImage.width-32 ){ // edge
			hero.x += distance;
			map.left+= distance;
		}


		// walls
		// for (i=0;i<blocks.length ;i++ )
		// {
		// 	if (isTouching(hero,blocks[i]))
		// 	{
		// 		hero.x = blocks[i].x - hero.width -1;
		// 	}
		// }
		
	}


	console.log("hero.x:"+hero.x+"hero.y:"+hero.y+"map.left:"+map.left+"map.top:"+map.top);

	// Are they touching?
	if(isTouching(hero,monster)){
		++monstersCaught;
		reset();
	}
};

// Handle touching
function isTouching(a,b) {
	if(	
		a.x <= (b.x + b.width)
		&& b.x <= (a.x + a.width)
		&& a.y <= (b.y + b.height)
		&& b.y <= (a.y + a.height) 
	)
	{
		return true;
	}
	else {
		return false

	}
}