import React, {Component} from 'react';

import styles from './home.module.css'

export default class Home extends Component {
    render() {
        return (
            <div className={styles.detailsContainer}>
                <h1>ID: </h1>
                <h2></h2>
                <h1>Name: </h1>
                <h2></h2>
            </div>
        )
    }
}