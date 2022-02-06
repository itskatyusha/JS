Vue.component('app-inp',{
    props:['title', 'placehold', 'vmodel'],
    template: `
<div class="flex flex-row content-center items-center">
<h5 class="text-lg pl-10 w-3/12">{{title}}</h5>
<input v-on:input="updateValue($event.target.value)" class="w-3/12 px-3 py-3 rounded-lg text-black" :placeholder=placehold type="text">
</div>
`,
    methods: {
        updateValue: function (value) {
            this.$emit('input', value)
        }
    }
});


Vue.component('app-inp-long',{
    props:['title', 'placehold', 'vmodel'],
    template: `
<div class="flex flex-row content-center items-center">
<h5 class="text-lg pl-10 w-3/12">{{title}}</h5>
<input v-on:input="updateValue($event.target.value)" class="3/12 px-3 py-3 rounded-lg text-black" :placeholder=placehold type="text">
</div>
`,
    methods: {
        updateValue: function (value) {
            this.$emit('input', value)
        }
    }
});


Vue.component('outp',{
    props:['title', 'name'],
    template: `
<div class="flex flex-row content-center items-center">
    <h5 class="text-lg pl-10">{{name}}: {{title}}</h5>
</div>
`
});

var vm = new Vue({
    el: '#databinding',
    data: {
        menuItems: [
            {
                name: 'Item 1',
                children: [{name: 'Subitem 1'},{name: 'Subitem 2'},{name: 'Subitem 3'}]
            },
            {
                name: 'Item 2'
            }
        ],
        firstname:'',
        input_image:'',
        surname: '',
        status_people: '',
        mob_phone: '',
        city_residence: '',
        e_mail: '',
        day_birthday: '',
        month_birthday: '',
        year_birthday: '',
        work_position: '',
        salary: '',
        skills: '',
        gender: '',
        level_edu:'',
        edu_institution: '',
        faculty: '',
        specialization: '',
        year_ending: '',
        mob_phone: "",
        isValid: true,
        regex: /^[0-9]{6,10}$/,
        currencyfrom : [
            {name : "Среднее"},
            {name:"Среднее специальное"},
            {name:"Неоконченное высшее"},
            {name:"Высшее"}
        ],
        edu_additional : [
            {name:"Среднее специальное"},
            {name:"Неоконченное высшее"},
            {name:"Высшее"}
        ],
        status : [
            {name:"Новый"},
            {name:"Назначено собеседование"},
            {name:"Принят"},
            {name: "Отказ"}
        ],
        currencyto : [
            {name:"января"},
            {name:"февраля"},
            {name:"марта"},
            {name:"апреля"},
            {name:"мая"},
            {name:"июня"},
            {name:"июля"},
            {name:"августа"},
            {name:"сентября"},
            {name:"октября"},
            {name:"ноября"},
            {name:"декабря"}
            // {name:"BHD", desc:"Bahraini Dinar"}
        ]
    },
    methods: {
        change:function(e){
            const number = e.target.value
            this.isNumberValid(number);
        },
        isNumberValid: function(inputNumber) {
            this.isValid=   this.regex.test(inputNumber)
        },
        setSelectedItem(item) {
            this.selectedDropdown = item;
        },

    },
    ready: function() {
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    }
});

