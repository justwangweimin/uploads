import React from 'react';
import {Modal,Icon} from 'antd';
import {
  Link
} from 'react-router-dom';

const Menu = () => (
  <div style={styles.div}>
    {/*<Link to='/parttime'style={styles.link}>找兼职<Icon type='contacts' /></Link>*/}
    {/*<Link to='/normal' style={styles.link}>普工专区<Icon type='idcard' /></Link>*/}
    {/*<Link to='/shop' style={styles.link}>店铺招聘<Icon type='shop' /></Link>*/}
    {/*<Link to='/near' style={styles.link}>附近职位<Icon type='fork' /></Link>    */}
    {/*<Link to='/market' style={styles.link}>商城<Icon type='solution' /></Link>*/}
    {/*<Link to='/qa' style={styles.link}>互动问答<Icon type='phone' /></Link>*/}
    {/*<Link to='/suggest' style={styles.link}>意见反馈<Icon type='star' /></Link>*/}
    <Link to='/company' style={styles.link}>找企业<Icon type='bank' /></Link>
    <Link to='/jobfair' style={styles.link}>招聘会<Icon type='flag' /></Link>
    <Link to='/topic' style={styles.link}>专题招聘<Icon type='tablet' /></Link>
    <Link to='/news' style={styles.link}>周边资讯<Icon type='notification' /></Link>
  </div>
);
export default Menu;
const styles = {
  div: {
    width: '100%',
    justifyContent: 'space-around',
    alignContent:'center',
    display: "flex",
    flexDirection:"row",
    padding: '0px 0px',
    flexWrap:'wrap',
  },
  // link:{flexGrow: 1,flexShrink: 1,height:'36px',display:'inline', lineHeight:'34px',fontSize: 12,  background: "#f8f8f8", width: '25%',border:'1px solid #cfd0d0',textAlign:'center'},
  link:{height:'36px',lineHeight:'34px',fontSize: 12,color:'#000000',  background: "#f8f8f8", width: '24%',border:'1px solid #cfd0d0',textAlign:'center'},
};