<template>
    <div>
      <div class="ui vertical segment">
        <div class="flexbox">
          <div class="flex-content">
            <h3>Dynamic Search with ajax (country name)</h3>
            <div>
              <model-list-select
                :list="terms"
                option-value="snomed"
                option-text="term"
                v-model="selectedResult"
                placeholder="select item"
                @searchchange="searchTerm"
              >
              </model-list-select>
            </div>
          </div>
          <div class="flex-result">
            <h4>input text(searchText)</h4>
            <p>{{ searchText }}</p>
            <table class="ui celled table">
              <thead>
              <tr>
                <th>snomed</th>
                <th>name</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>{{ selectedResult.snomed }}</td>
                <td>{{ selectedResult.term }}</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import { ModelListSelect } from "vue-search-select"
  import axios from "axios"
  import { ajaxFindTerm } from "../data/snomedApi"
  
  export default {
    data() {
      return {
        terms: [],
        selectedResult: {},
        searchText: "",
        animations: [],
        selectedAnimation: {},
        searchText2: "",
      }
    },
    methods: {
      searchTerm(searchText) {
        this.searchText = searchText
        ajaxFindTerm(searchText).then(response => {
          this.terms = response
        })
      },
      printSearchText(searchText) {
        this.searchText2 = searchText
      }
    },
    components: {
      ModelListSelect,
    },
  }
  </script>