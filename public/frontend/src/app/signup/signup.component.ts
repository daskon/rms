import { Component, OnInit } from '@angular/core';
import {RegistrationService} from "../registration.service";

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {

  constructor(private  registrationService: RegistrationService) { }

  ngOnInit() {
  }

  onGetSignup(){
    this.registrationService.getSignup();
  }

}
