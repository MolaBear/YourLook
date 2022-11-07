const categorySet = new Set();
const colorSet = new Set();
const seasonSet = new Set();

const myClothing = [
    {
        id: 0, 
        name:'scotch-hoodie',
        img:'img2/sweaters/sweater_1.jfif',
        category:'outwear',
        color:'red',
        season: ['fall','winter']
    },
    {
        id: 1,
        name: 'black-pants',
        img: 'img2/pants/pants_2.jpg',
        category:'pants',
        color:'denim',
        season: ['fall','winter','spring', 'summer']
    },
    {
        id:2,
        name:'black-shoes',
        img:'img2/shoes/shoes_3.jpeg',
        category:'shoes',
        color:'black',
        season:['fall','winter','spring', 'summer']
    },
    {
        id:3,
        name:'white-shirt',
        img:'img2/shirts/shirt_2.jfif',
        category:'tops',
        color:'white',
        season: ['summer','spring']
    },
    {
        id:4,
        name:'patagonia-black-parka',
        img:'img2/shoes/shoes_1.jpeg',
        category:'shoes',
        color:'white',
        season:['fall','winter','spring', 'summer']
    },
    {
        id:5,
        name: 'cargo-pants', 
        img: 'img2/pants/pants_1.jpg',  
        category: 'pants', 
        color: 'black',
        season: ['summer','winter','spring', 'summer']
    },
    {
        id:6,
        name:'patagonia-black-parka',
        img:'img2/sweaters/sweater_2.jpg',
        category:'hoodies',
        color:'black',
        season:['winter']
    },
    {
        id:7,
        name: 'white-flower-shirt',
        img: 'img2/shirts/shirt_1.jpeg',
        category: 'tops',
        color:'white',
        season: ['spring']
    },
    {
        id:8,
        name:'patagonia-black-parka',
        img:'img2/shoes/shoes_2.jpeg',
        category:'shoes',
        color:'grey',
        season:['fall','winter','spring', 'summer']
    },
    {
        id:9,
        name:'black-shirt',
        img:'img2/shirts/shirt_3.jpeg',
        category:'pants',
        color:'blue',
        season: ['fall','spring']
    }
]

const categoryCheckboxes = document.querySelectorAll(".category");
const colorCheckboxes = document.querySelectorAll(".color");
const seasonCheckboxes = document.querySelectorAll(".season");
const displayArea = document.getElementById("grid");


const initialLoading = () =>{
    for (i=0;i<myClothing.length;i++){
        let div = document.createElement("div");
        div.classList.add("item");
        let img = document.createElement('img');
        img.src=myClothing[i].img;
        div.appendChild(img);
        displayArea.appendChild(div);
    }
}

const selectCategories = () => {
    console.log(categoryCheckboxes);
    for (const checkbox of categoryCheckboxes){
        console.log("Checked status: " + checkbox.checked)
        //const type = checkbox.name;
        const value = checkbox.value;
        //let criteria = type + "=" + value;
        if (checkbox.checked===true){
            categorySet.add(value);
        }
        else {
            if (categorySet.has(value)){
                categorySet.delete(value);
            };
        };
    }
    console.log(categorySet);
};

const selectColors = () => {
    console.log(colorCheckboxes);
    for (const checkbox of colorCheckboxes){
        console.log("Checked status: " + checkbox.checked)
        //const type = checkbox.name;
        const value = checkbox.value;
        //let criteria = type + "=" + value;
        if (checkbox.checked===true){
            colorSet.add(value);
        }
        else {
            if (colorSet.has(value)){
                colorSet.delete(value);
            };
        };
    }
    console.log(colorSet);
}

const selectSeasons = () => {
    console.log(seasonCheckboxes);
    for (const checkbox of seasonCheckboxes){
        console.log("Checked status: " + checkbox.checked)
        //const type = checkbox.name;
        const value = checkbox.value;
        //let criteria = type + "=" + value;
        if (checkbox.checked===true){
            seasonSet.add(value);
        }
        else {
            if (seasonSet.has(value)){
                seasonSet.delete(value);
            };
        };
    }
    console.log(seasonSet);
}

const setIntersection = (a,b) => {
    let intersection = new Set(
        [...a].filter(x => b.has(x)));
    if (intersection.size > 0){
        return true;
    }
    return false;
};

const applyFilter = () =>{
    const filteredList = myClothing.filter((item)=>{
        if (categorySet.size>0 && colorSet.size===0 && seasonSet.size===0){
            if (categorySet.has(item.category)){
                return true;
            }
        }

        else if (categorySet.size>0 && colorSet.size>0 && seasonSet.size===0){
            if (categorySet.has(item.category) && colorSet.has(item.color)){
                return true;
            }
        }

        else if (categorySet.size>0 && colorSet.size>0 && seasonSet.size>0){
            itemSeasonSet = new Set(item.season);
            if (categorySet.has(item.category) && colorSet.has(item.color) && setIntersection(seasonSet,itemSeasonSet)===true){
                return true;
            }
        }

        else if (categorySet.size===0 && colorSet.size>0 && seasonSet.size===0){
            if (colorSet.has(item.color)){
                return true;
            }
        }

        else if (categorySet.size===0 && colorSet.size===0 && seasonSet.size>0){
            itemSeasonSet = new Set(item.season);
            if (setIntersection(seasonSet, itemSeasonSet)===true){
                return true;
            }
        }

        else if (categorySet.size>0 && colorSet.size===0 && seasonSet.size>0){
            itemSeasonSet = new Set(item.season);
            if (categorySet.has(item.category) && setIntersection(seasonSet, itemSeasonSet)===true){
                return true;
            }
        }

        else if (categorySet.size===0 && colorSet.size>0 && seasonSet.size>0){
            itemSeasonSet = new Set(item.season);
            if (colorSet.has(item.color) && setIntersection(seasonSet, itemSeasonSet)===true){
                return true;
            }
        }

        else if (categorySet.size===0 && colorSet.size===0 && seasonSet.size===0){
            
            initialLoading();
            
        }

        
    })
   displayArea.innerHTML="";
    for (i=0; i<filteredList.length; i++){
        let div = document.createElement("div");
        div.classList.add("item");
        let img = document.createElement('img');
        img.src=filteredList[i].img;
        div.appendChild(img);
        displayArea.appendChild(div);

    }
    // clearing out criteria after hitting Apply
    /*for (const checkbox of categoryCheckboxes){
        checkbox.checked=false;
    };
    for (const checkbox of colorCheckboxes){
        checkbox.checked=false;
    };
    for (const checkbox of seasonCheckboxes){
        checkbox.checked=false;
    };
    categorySet.clear();
    colorSet.clear();
    seasonSet.clear();*/

    document.getElementById("filter-bar").style.width = "0";
    console.log(filteredList);
};

const resetFilter = () =>{
    for (const checkbox of categoryCheckboxes){
        checkbox.checked=false;
    };
    for (const checkbox of colorCheckboxes){
        checkbox.checked=false;
    };
    for (const checkbox of seasonCheckboxes){
        checkbox.checked=false;
    };
    categorySet.clear();
    colorSet.clear();
    seasonSet.clear();
    const template = `
    <div class="add-panel">
        <a href="https://www.google.com">
        <i class="fas fa-plus"></i>
        </a>
    </div>`
    displayArea.innerHTML=template;
    initialLoading();
    document.getElementById("filter-bar").style.width = "0"
    console.log(categorySet);
};

const openNav =()=> {
    document.getElementById("filter-bar").style.width = "200px";
  }

const closeNav=()=>{
    document.getElementById("filter-bar").style.width = "0";
  }


