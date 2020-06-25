<template>
    <div>
            <b-card v-for="video in videos" :key="video.id" no-body class="overflow-hidden mb-2">
                <b-row no-gutters>
                    <b-col md="2">
                        <b-button>{{video.episode_number}}</b-button>
                    </b-col>
                    <b-col md="10">
                        <b-card-body :title="video.title">
                            <b-card-text>
                                {{video.description}}
                            </b-card-text>
                        </b-card-body>
                    </b-col>
                </b-row>
            </b-card>
    </div>
</template>

<script>
export default {
    props:['videos']
}
</script>