import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { SigninComponent } from './signin/signin.component';
import { SignupComponent } from './signup/signup.component';
import {routing} from "./app.routing";
import {HttpModule} from "@angular/http";
import {FormsModule} from "@angular/forms";
import {RegistrationService} from "./registration.service";

@NgModule({
  declarations: [
    AppComponent,
    SigninComponent,
    SignupComponent
  ],
  imports: [
    BrowserModule,
    HttpModule,
    FormsModule,
    routing
  ],
  providers: [RegistrationService],
  bootstrap: [AppComponent]
})
export class AppModule { }
