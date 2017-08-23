#Read Me 
 once cloned out of git repo run php composer.phar update to get all bundles.
 then run bin/console server:run
 api is now set up and useable now. 
 use postman to run api.

To run find (get)

    localhost:8080/recipe/find/{id} 
    

## To run findall (get)
 
    localhost:8080/recipe/findall/cuisine/{cuisine}/page/{page}
        
## To insert a new recipe (post)

    localhost:8080/recipe/create
    
    Request body must be like so
    
    [
	{
		"box_type": "gourmet",
		"title": "Tamil Nadu Prawn Masala",
		"slug": "tamil-nadu-prawn-masala",
		"short_title": "",
		"marketing_description": "Tamil Nadu is a state on the eastern coast of the southern tip of India. Curry from there is particularly famous and it's easy to see why. This one is brimming with exciting contrasting tastes from ingredients like chilli powder, coriander and fennel seed",
		"calories_kcal": "524",
		"protein_grams": "12",
		"fat_grams": "22",
		"carbs_grams": "0",
		"bulletpoint1": "Vibrant & Fresh",
		"bulletpoint2": "Warming, not spicy",
		"bulletpoint3": "Curry From Scratch",
		"recipe_diet_type_id": "fish",
		"season": "all",
		"base": "pasta",
		"protein_source": "seafood",
		"preparation_time_minutes": "40",
		"shelf_life_days": "4",
		"equipment_needed": "Appetite",
		"origin_country": "Great Britain",
		"recipe_cuisine": "italian",
		"in_your_box": "king prawns, basmati rice, onion, tomatoes, garlic, ginger, ground tumeric, red chilli powder, ground cumin, fresh coriander, curry leaves, fennel seeds",
		"gousto_reference": "58"
	}, .... ]
    
## To update a existing recipe (put)

    localhost:8080/recipe/update/{id}
     
    Request body must be like so
    
     {
		"box_type": "vegetarian",
		"title": "Courgette Pasta Rags",
		"slug": "courgette-pasta-rags",
		"short_title": "",
		"marketing_description": "Kick-start the new year with some get-up and go with this lean green vitality machine. Protein-packed chicken and mineral-rich kale are blended into a smooth, nut-free version of pesto; creating the ultimate composition of nutrition and taste",
		"calories_kcal": "524",
		"protein_grams": "12",
		"fat_grams": "22",
		"carbs_grams": "0",
		"bulletpoint1": "",
		"bulletpoint2": "",
		"bulletpoint3": "",
		"recipe_diet_type_id": "meat",
		"season": "all",
		"base": "",
		"protein_source": "chicken",
		"preparation_time_minutes": "40",
		"shelf_life_days": "4",
		"equipment_needed": "Appetite",
		"origin_country": "Great Britain",
		"recipe_cuisine": "british",
		"in_your_box": "",
		"gousto_reference": "59"
	}
    
## To rate cuisine
    http://localhost:8000/recipe/rate/{id}/rating/{rate}

The reason for choosing symfony is because I have been expodes to it and I know how it works. 

The backend does not rely on the frontend so that is the solution is the best.   You have one restful client service set up which can server many application (mobile, web or tablet) 

Data has already been set up for you to look at.  

