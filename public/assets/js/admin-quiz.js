"use strict";

new Vue({
    el: '#app',
    data: {
      answers: []
    },
    methods: {
      addAns() {
        // creating & pushing some random value into the 'answers' array to increase it's range
        let firstValue = Math.floor(Math.random() * 11);
        let secondValue = Math.floor(Math.random() * 1000000);
        let finalValue = firstValue + secondValue;

        this.answers.push({ 'uniqId': finalValue });
      },
      removeAns(index) {
        this.answers.splice(index, 1);
      }
    }
});