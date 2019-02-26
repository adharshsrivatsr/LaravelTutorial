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
);


Vue.component('tabs',

    {
        template: 
            `   
            <div>
                <div class="tabs">
                    <ul>
                        <li v-for='t in tabs' :class="{'is-active':t.isactive}">
                            <a href='#' @click='selectTab(t)'> {{t.name}} </a>

                        </li>
                    </ul>
                </div>

                <div class='tabs-details'>
                    <slot></slot>
                </div>
            </div>
        `,

        data()
        {
            return{
                tabs:[]
            }
        },

        created()
        {
            this.tabs=this.$children;
        },

        methods:
        {
                selectTab(selectedTab)
                {
                    this.tabs.forEach(tab => {

                        tab.isactive=(selectedTab.name==tab.name);
                    });
                }
        }
    }
);

Vue.component('tab',
{
    props:{
        name: {required:true},
        selected: {default:false}
    },

    data()
    {
        return{
        isactive:false
        }

    },

    mounted()
    {
        this.isactive=this.selected;
    },

    template :
        `
          <div v-show=isactive><slot></slot></div>
        `

})

new Vue({
    el: '#root',

    data:
    {
        showModal:false
    }

});