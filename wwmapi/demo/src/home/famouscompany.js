import React, {Component} from 'react';
import {List, Card} from 'antd-mobile';
import {
  Link
} from 'react-router-dom';

const Item = List.Item;

class Famouscompany extends Component {
  constructor(props) {
    super(props);
    this.state = {
      data: [1, 2, 3],
      url: "/company",
      txt: '名企招聘'
    }
  }
  render() {
    let {data, url, txt} = this.state;
    return (
      <List>
        <Item extra={<Link to={url} style={styles.link}>更多&gt;&gt;</Link>}>{txt}</Item>
        {
          data.map(item => (
            <Item>
              <Card full>
                <Card.Header
                  title="This is title"
                  thumb="https://cloud.githubusercontent.com/assets/1698185/18039916/f025c090-6dd9-11e6-9d86-a4d48a1bf049.png"
                  extra={<span>this is extra</span>}
                />
                <Card.Body>
                  <div>This is content of `Card`</div>
                </Card.Body>
                <Card.Footer content="footer content" extra={<div>extra footer content</div>}/>
              </Card>
            </Item>
          ))
        }
      </List>
    );
  }
}

export default Famouscompany;
const
  styles = {
    div: {
      width: '100%',
      justifyContent: 'space-around',
      alignContent: 'center',
      display: "flex",
      flexDirection: "row",
      padding: '0px 0px',
      flexWrap: 'wrap',
    },
    // link:{flexGrow: 1,flexShrink: 1,height:'36px',display:'inline', lineHeight:'34px',fontSize: 12,  background: "#f8f8f8", width: '25%',border:'1px solid #cfd0d0',textAlign:'center'},
    link: {
      height: '40px',
      lineHeight: '38px',
      fontSize: 16,
      color: '#000000',
      background: "#f8f8f8",
      width: '24%',
      border: '1px solid #cfd0d0',
      textAlign: 'center'
    },
  };