var vm = new Vue({
    el: '#databinding',
    data: {
        name:'',
        currencyfrom : [
            {name : "Фут"},
            {name:"Морская миля"},
            {name:"Градус"},
            {name:"Температура по Цельсию"}
        ],
        currencyto : [
            {name:"Метр"},
            {name:"Километр"},
            {name:"Радиан"},
            {name:"Температура по Фаренгейту"}
        ],
        convertfrom: "Фут",
        convertto:"Метр",
        amount :""
    },
    computed :{
        finalamount:function() {
            var to = this.convertto;
            var from = this.convertfrom;
            var final;
            switch(from) {
                case "Фут":
                    if (to == "Метр") {
                        final = this.amount * 0.3048;
                    }
                    else {
                        final = 'Не допустимо';
                    }
                    break;
                case "Морская миля":
                    if (to == "Километр") {
                        final = this.amount * 1.852;
                    }
                    else {
                        final = 'Не допустимо';
                    }
                    break;
                case "Градус":
                    if (to == "Радиан") {
                        final = this.amount * 0.0174533;
                    }
                    else {
                        final = 'Не допустимо';
                    }
                    break;
                case "Температура по Цельсию":
                    if (to == "Температура по Фаренгейту") {
                        final = this.amount * 1.8 + 32;
                    }
                    else {
                        final = 'Не допустимо';
                    }
                    break
            }
            return final;
        }
    }
});