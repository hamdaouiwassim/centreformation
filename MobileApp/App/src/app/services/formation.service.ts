import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
 // Typescript custom enum for search types (optional)
 export enum SearchType {
  all = '',
  movie = 'movie',
  series = 'series',
  episode = 'episode'
}
 
@Injectable({
  providedIn: 'root'
})

export class FormationService {

  url = 'http://127.0.0.1:8000/api/formations';
  apiKey = ''; // <-- Enter your own key here!
 
  /**
   * Constructor of the Service with Dependency Injection
   * @param http The standard Angular HttpClient to make requests
   */
  constructor(private http: HttpClient) { }
 
  /**
  * Get data from the OmdbApi 
  * map the result to return only the results that we need
  * 
  * @param {string} title Search Term
  * @param {SearchType} type movie, series, episode or empty
  * @returns Observable with the search results
  */
  // searchData(title: string, type: SearchType): Observable<any> {
  //   return this.http.get(`${this.url}?s=${encodeURI(title)}&type=${type}&apikey=${this.apiKey}`).pipe(
  //     map(results => results['Search'])
  //   );
  // }
  getAll(){
    return this.http.get(`${this.url}`)

  }
 
  /**
  * Get the detailed information for an ID using the "i" parameter
  * 
  * @param {string} id imdbID to retrieve information
  * @returns Observable with detailed information
  */
 getFormationById(id) {
   console.log(`${this.url}/`+id)
    return this.http.get(`${this.url}/`+id);
  }


}
