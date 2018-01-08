import {RouterModule, Routes} from "@angular/router";
import {SignupComponent} from "./signup/signup.component";
import {SigninComponent} from "./signin/signin.component";
import {ModuleWithProviders} from "@angular/core";

const APP_ROUTES: Routes = [
    {path: 'signup', component:SignupComponent},
    {path: 'signin', component:SigninComponent}
];

export const  routing: ModuleWithProviders = RouterModule.forRoot(APP_ROUTES);