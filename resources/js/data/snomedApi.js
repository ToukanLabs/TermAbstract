import axios from "axios";

export function ajaxFindTerm (query) {
    return axios.get('/disorder?term=' + query).then((result) => result.data);
}