import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './components/header/header.component';
import { LeadsComponent } from './components/leads/leads.component';
import { LeadFormComponent } from './components/lead-form/lead-form.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    LeadsComponent,
    LeadFormComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
