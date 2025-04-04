
    //getting all required elements
    const search_wrapper = document.querySelector(".searchbar");
    const input_box = search_wrapper.querySelector("input");
    const suggetion_box = search_wrapper.querySelector(".autocomplete");
    const a_tag = suggetion_box.querySelector("a");

    //if user press any key and release
    input_box.onkeyup = (e) =>{
        let user_data = e.target.value; //take all the entered alphabets in search bar
        let empty_arr =[];
        if(user_data){
            empty_arr = suggestions.filter((data)=>{
                return data.toLocaleLowerCase().startsWith(user_data.toLocaleLowerCase());
            })

            empty_arr = empty_arr.map((data)=>{
                return data = '<li class="autol">'+ data +'</li>';
            })
            console.log(empty_arr);
            search_wrapper.classList.add('active'); //show autocomplete box
            showsuggestion(empty_arr);

            let all_list = suggetion_box.querySelectorAll("li");
            for (let i = 0; i < all_list.length; i++) {
                //adding onclick attribute in all li tag.
                all_list[i].setAttribute("onclick", "select(this)");
            }
        }
        else{
            search_wrapper.classList.remove('active'); //hide autocomplete box
        }
    }

    function select(element){
        let select_user_data = element.textContent;
        input_box.value = select_user_data; // passing the user selected list item in searchbar.
        search_wrapper.classList.remove('active');
    }

    function showsuggestion(list){
        let list_data;
        if(!list.length){

        }
        else{
            list_data = list.join(' ');
        }
        suggetion_box.innerHTML = list_data;
    }

    function openPage(){
        var x = document.getElementById('search').value;
        if(x === "shades"){
            window.open("/shade.php");
        }
    }