<template>
    <div class="col-3 col-lg-3 col-md-3">
        <div class="list-group">
            <router-link :to="`/user/${type}/${id}/basic`" :class="[menu === 'basic' ? 'active' : '', 'list-group-item']"><span class="hidden-sm-up"><i class="fas fa-user"></i></span>
                <span class="hidden-xs-down">
                    {{trans('user.basic')}}
                </span>
            </router-link>
            <router-link :to="`/user/${type}/${id}/contact`" :class="[menu === 'contact' ? 'active' : '', 'list-group-item']"><span class="hidden-sm-up"><i class="fas fa-phone"></i></span>
                <span class="hidden-xs-down">
                    {{trans('user.contact')}}
                </span>
            </router-link>
            <router-link :to="`/user/${type}/${id}/avatar`" :class="[menu === 'avatar' ? 'active' : '', 'list-group-item']"><span class="hidden-sm-up"><i class="far fa-address-book"></i></span>
                <span class="hidden-xs-down">
                    {{trans('user.avatar')}}
                </span>
            </router-link>
            <router-link :to="`/user/${type}/${id}/social`" :class="[menu === 'social' ? 'active' : '', 'list-group-item']"><span class="hidden-sm-up"><i class="fas fa-share-alt"></i></span>
                <span class="hidden-xs-down">
                    {{trans('user.social')}}
                </span>
            </router-link>
            <router-link v-if="id != getAuthUser('id')" :to="`/user/${type}/${id}/password`" :class="[menu === 'password' ? 'active' : '', 'list-group-item']"><span class="hidden-sm-up"><i class="fas fa-key"></i></span>
                <span class="hidden-xs-down">
                    {{trans('user.reset_password')}}
                </span>
            </router-link>
            <router-link v-if="getConfig('email_template')" :to="`/user/${type}/${id}/email`" :class="[menu === 'email' ? 'active' : '', 'list-group-item']"><span class="hidden-sm-up"><i class="fas fa-envelope"></i></span>
                <span class="hidden-xs-down">
                    {{trans('user.email')}}
                </span>
            </router-link>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            menu: {
                default: ''
            },
            type: {
                required: true
            },
            id: {
                required: true
            }
        },
        mounted(){
        },
        methods: {
            getAuthUser(name){
                return helper.getAuthUser(name);
            },
            getConfig(config){
                return helper.getConfig(config);
            }
        }
    }
</script>
