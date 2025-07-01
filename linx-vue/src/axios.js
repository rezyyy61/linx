import axios from 'axios'


const instance = axios.create({
    baseURL: 'http://localhost:8080',
    withCredentials: true,
    headers: {
        Accept: 'application/json',
        'X-Requested-With': 'XMLHttpRequest'
    }
})

export default instance
