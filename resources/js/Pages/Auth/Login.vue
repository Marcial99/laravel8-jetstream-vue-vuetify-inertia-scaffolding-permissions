<template>
    <v-app>
        <v-container fluid fill-height>
            <v-row justify="center" align="center">
                <v-col cols="12" md="6">
                    <v-card elevation="2" class="tw-flex tw-flex-col">
                        <v-card-title>Inicio de sesión</v-card-title>

                        <v-card-text>
                            <jet-validation-errors class="tw-mb-4" />
                            <v-form @submit.prevent="submit">
                                <v-row justify="center">
                                    <v-col cols="12" md="12">
                                        <v-text-field
                                            v-model="form.email"
                                            label="Correo electrónico"
                                        ></v-text-field> </v-col
                                ></v-row>
                                <v-row justify="center">
                                    <v-col cols="12" md="12">
                                        <v-text-field
                                            v-model="form.password"
                                            label="Contraseña"
                                            type="password"
                                        ></v-text-field> </v-col
                                ></v-row>
                                <v-row justify="center">
                                    <v-col cols="12" md="12">
                                        <v-checkbox
                                            label="Recordar contraseña"
                                            v-model="form.remember"
                                        ></v-checkbox> </v-col
                                ></v-row>

                                <v-row>
                                    <v-spacer></v-spacer>
                                    <v-btn color="primary" dark type="submit"
                                        >Iniciar sesión</v-btn
                                    >
                                </v-row>
                            </v-form>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </v-app>

    <!--  <jet-authentication-card>
        <template #logo>
            <jet-authentication-card-logo />
        </template>

        <jet-validation-errors class="tw-mb-4" />

        <div
            v-if="status"
            class="tw-mb-4 tw-font-medium tw-text-sm tw-text-green-600"
        >
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <jet-label for="email" value="Email" />
                <jet-input
                    id="email"
                    type="email"
                    class="tw-mt-1 tw-block tw-w-full"
                    v-model="form.email"
                    required
                    autofocus
                />
            </div>

            <div class="tw-mt-4">
                <jet-label for="password" value="Password" />
                <jet-input
                    id="password"
                    type="password"
                    class="tw-mt-1 tw-block tw-w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />
            </div>

            <div class="tw-block tw-mt-4">
                <label class="tw-flex tw-items-center">
                    <jet-checkbox name="remember" v-model="form.remember" />
                    <span class="tw-ml-2 tw-text-sm tw-text-gray-600"
                        >Remember me</span
                    >
                </label>
            </div>

            <div class="tw-flex tw-items-center tw-justify-end tw-mt-4">
                <inertia-link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="tw-underline tw-text-sm tw-text-gray-600 tw-hover:text-gray-900"
                >
                    Forgot your password?
                </inertia-link>
                <v-btn elevation="2" type="submit" color="primary">
                    Login</v-btn
                >
            </div>
        </form>
    </jet-authentication-card> -->
</template>

<script>
/* 
import JetAuthenticationCard from "@/Jetstream/AuthenticationCard";
import JetAuthenticationCardLogo from "@/Jetstream/AuthenticationCardLogo";
import JetButton from "@/Jetstream/Button";
import JetInput from "@/Jetstream/Input";
import JetCheckbox from "@/Jetstream/Checkbox";
import JetLabel from "@/Jetstream/Label";
import JetValidationErrors from "@/Jetstream/ValidationErrors"; */
import JetValidationErrors from "@/Jetstream/ValidationErrors";
export default {
    components: {
        JetValidationErrors,
    },

    props: {
        canResetPassword: Boolean,
        status: String,
    },

    data() {
        return {
            form: this.$inertia.form({
                email: "",
                password: "",
                remember: false,
            }),
        };
    },

    methods: {
        submit() {
            this.form
                .transform((data) => ({
                    ...data,
                    remember: this.form.remember ? "on" : "",
                }))
                .post(this.route("login"), {
                    onFinish: () => this.form.reset("password"),
                });
        },
    },
};
</script>
