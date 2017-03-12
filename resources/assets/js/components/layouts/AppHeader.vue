<template>
    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Left -->
        <ul class="nav-header pull-left">
            <li class="hidden-md hidden-lg">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                    <i class="fa fa-navicon"></i>
                </button>
            </li>
            <li class="hidden-xs hidden-sm">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
            </li>
            <li class="visible-xs">
                <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </li>
            <li class="js-header-search header-search">
                <form class="form-horizontal" action="" @submit.prevent="send">
                    <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                        <input class="form-control" type="text" id="users" name="base-material-text" placeholder="Search...">
                        <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                    </div>
                </form>
            </li>
        </ul>
        <!-- END Header Navigation Left -->
        <!-- Header Navigation Right -->
        <ul class="nav-header pull-right">
            <li>
                <div class="btn-group">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false">
                        {{ $store.user.name }}
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-header">Profile</li>
                        <li>
                            </i><router-link :to="{ name: 'personal-settings' }"><i class="si si-settings pull-right"></i>Settings</router-link>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Actions</li>
                        <li>
                            <a tabindex="-1" href="/logout">
                                <i class="si si-logout pull-right"></i>Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </header>
    <!-- END Header -->
</template>

<script>
    import autocomplete from 'autocomplete.js'
    import algolia from 'algoliasearch'
    export default {
        mounted () {
            const index = algolia('ZMMFBCVWN4', '1c90e614a2397df5b647c95cf3801280').initIndex('users')

            autocomplete('#users', {
                hint: true
            }, {
                source: autocomplete.sources.hits(index, { hitsPerPage: 10 }),
                displayKey: 'name',
                templates: {
                    suggestion (suggestion) {
                        return '<span>' + suggestion._highlightResult.name.value + '</span>';
                    },
                    empty: '<div class="aa-empty">No people found</div>'
                }
            })

        }
    }
</script>

