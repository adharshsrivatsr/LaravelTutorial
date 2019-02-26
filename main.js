Vue.component('task-list', 
{
    template:
    `
    <div>
        <tasks v-for='j in jobs'>{{j.task}} </tasks>
    </div>

    `,

    data()
    {
        return{
            jobs: [
                {task:'Go there', complete : true},
                {task:'Go here', complete : true},
                {task:'Go somewhere', complete : false},

            ]
        };
    }


});

Vue.component('tasks',
{
    template:'<li><b><slot></slot></b></li>'
});


Vue.component('message',
{

    props: ['title','body'],

    template:
    `
        <article class="message" v-show='isVisible'>

            <div class="message-header" >
                <p>{{title}}</p>
                <button align='right' type='reset' @click='isVisible=false'>x</button>
            </div>

            <div class="message-body">
                {{body}}
            </div>

        </article>

    `,

    data()
    {
        return{
            isVisible:true
        }
    }
    }
);


Vue.component('modal',
{
    
    template: 
    `<div class="modal is-active">
            <div class="modal-background"></div>
            <div class="modal-content">
            <div class='box'>
              <slot></slot>
              </div>
            </div>
            <button class="modal-close is-large" @click="$emit('click')">dsfasdf</button>
          </div>
    `
}
)



new Vue({
    el: '#root',

    data:
    {
        showModal:false
    }

});