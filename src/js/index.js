

function getRobots(){

}


function addRobot(id, photo, name, price){
    
    let main_div = document.createElement('div');    
        main_div.classList.add("robot");
        main_div.id = "file_" + id;

    let img = document.createElement('img');
        img.classList.add("robo-img");
        img.src = photo;

    let div_photo = document.createElement('div');
        div_photo.classList.add("robo-photo");
        
    let p_name = document.createElement("p");
        p_name.classList.add("robo-name");
        p_name.textContent = name;

    let p_price = document.createElement("p");
        p_price.classList.add("robo-price");
        p_price.textContent = price + " p";

    let div_robo_info = document.createElement("div");
        div_robo_info.classList.add("robo-info");

    
    div_photo.append(img);

    div_robo_info.append(p_name );
    div_robo_info.append(p_price);

    main_div.append(div_photo);
    main_div.append(div_robo_info);

    document.getElementById('site-body').append(main_div);
}

// addRobot(2, "../img/any.jpg", "name22", "price22");
