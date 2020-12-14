import { Component, OnInit } from '@angular/core';
import { FormationService } from 'src/app/services/formation.service';
import { ActivatedRoute } from '@angular/router'


@Component({
  selector: 'app-formation-details',
  templateUrl: './formation-details.page.html',
  styleUrls: ['./formation-details.page.scss'],
})
export class FormationDetailsPage implements OnInit {
  formation : any;
  id : String
  constructor(public formationService : FormationService , private route : ActivatedRoute) { }

  ngOnInit() {
    this.id = this.route.snapshot.paramMap.get('id')
    console.log(this.route.snapshot.paramMap.get('id'))
    this.formationService.getFormationById(this.id).subscribe( res => {
      this.formation = res;
      console.log(this.formation)
    });
  }

}
