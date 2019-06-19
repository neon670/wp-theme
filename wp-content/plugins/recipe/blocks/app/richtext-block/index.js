import block_icons from '../icons/index';

const { registerBlockType }         =   wp.blocks;
const { RichText }                  =   wp.editor
const { __ }                        =   wp.i18n;

registerBlockType( 'udemy/rich-text', {
    title:                              __( 'Rich Text Example', 'recipe' ),
    description:                        __( 'Rich text example', 'recipe' ),
    category:                           'common',
    icon:                               block_icons.wapuu,
    attributes: {
        message:{
            type:                       'array',
            source:                     'children',
            selector:                   'message-ctr'
        }
    },
    edit: ( props ) => {
        return (
            <div className={ props.className }>
                <h3>Rich Text Example Block</h3>
                <RichText tagName="div"
                    mulitline="p"
                    placeholder={__('Add your content here', 'recipe')}
                    onChange={(new_value)=>{
                        props.setAttributes({ message:new_val });
                    }}/>
                    
            </div>
        );
    },
    save: ( props ) => {

    }
});